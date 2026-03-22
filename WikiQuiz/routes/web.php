<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    $trending = [];

    try {
        $response = Http::withHeaders([
            'User-Agent' => 'WikiQuiz/1.0'
        ])->get("https://en.wikipedia.org/w/api.php", [
            'action' => 'query',
            'list' => 'mostviewed',
            'pvimoffset' => 0,
            'pvimdays' => 1,
            'pvimlimit' => 20,
            'format' => 'json',
            'origin' => '*'
        ]);

        if ($response->ok()) {
            $articles = $response->json()['query']['mostviewed'] ?? [];
            $filtered = array_filter(
                $articles,
                fn($a) =>
                $a['ns'] === 0 &&
                    $a['title'] !== 'Main Page'
            );

            foreach (array_slice(array_values($filtered), 0, 4) as $article) {
                $slug = $article['title'];

                $detail = Http::withHeaders(['User-Agent' => 'WikiQuiz/1.0'])
                    ->get("https://en.wikipedia.org/api/rest_v1/page/summary/" . str_replace(' ', '_', $slug));

                $info = $detail->ok() ? $detail->json() : [];

                $trending[] = [
                    'title' => $info['title'] ?? $slug,
                    'description' => $info['description'] ?? 'Wikipedia article',
                    'thumbnail' => $info['thumbnail']['source'] ?? null,
                    'slug' => $slug,
                ];
            }

        }
    } catch (\Exception $e) {
        // fail silently
    }

    return view('index', ['trending' => $trending]);
});

Route::get('/article/{title}', function ($title) {
    return view('article', ['title' => $title]);
})->name('article');

Route::get('/quiz/{title}', function ($title) {
    return view('quiz', ['title' => $title]);
})->name('quiz');
