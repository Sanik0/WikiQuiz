<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::get('/', function () {
    $trending = [];

    try {
        $yesterday = now()->subDay()->format('Y/m/d');

        $response = Http::withHeaders([
            'User-Agent' => 'WikiQuiz/1.0 (contact@wikiquiz.com)'
        ])->get("https://wikimedia.org/api/rest_v1/metrics/pageviews/top/en.wikipedia/all-access/{$yesterday}");

        if ($response->ok()) {
            $articles = $response->json()['items'][0]['articles'] ?? [];

            $filtered = array_filter(
                $articles,
                fn($a) =>
                !str_contains($a['article'], 'Main_Page') &&
                    !str_contains($a['article'], 'Special:') &&
                    !str_contains($a['article'], 'Wikipedia:') &&
                    !str_contains($a['article'], 'Portal:') &&
                    !str_contains($a['article'], 'File:')
            );

            foreach (array_slice(array_values($filtered), 0, 4) as $article) {
                $slug = $article['article'];

                $detail = Http::withHeaders(['User-Agent' => 'WikiQuiz/1.0'])
                    ->get("https://en.wikipedia.org/api/rest_v1/page/summary/" . $slug);

                $info = $detail->ok() ? $detail->json() : [];

                $trending[] = [
                    'title' => $info['title'] ?? str_replace('_', ' ', $slug),
                    'description' => $info['description'] ?? 'Wikipedia article',
                    'thumbnail' => $info['thumbnail']['source'] ?? null,
                    'slug' => $slug,
                ];
            }
        }
    } catch (\Exception $e) {
    }

    return view('index', ['trending' => $trending]);
})->name('index');

Route::post('/generate-quiz', function (Request $request) {
    $title = $request->input('title');
    $count = $request->input('count', 10);

    $textResponse = Http::withHeaders(['User-Agent' => 'WikiQuiz/1.0'])
        ->get("https://en.wikipedia.org/w/api.php", [
            'action' => 'query',
            'titles' => str_replace('_', ' ', $title),
            'prop' => 'extracts',
            'explaintext' => true,
            'format' => 'json',
            'origin' => '*'
        ]);

    $pages = $textResponse->json()['query']['pages'] ?? [];
    $page = array_values($pages)[0];
    $text = $page['extract'] ?? '';

    $sentences = preg_split('/(?<=[.?!])\s+/', preg_replace('/\s+/', ' ', $text));
    $sentences = array_values(array_filter(
        $sentences,
        fn($s) =>
        strlen($s) > 40 &&
            strlen($s) < 400 &&
            !preg_match('/\[|\]|{|}|=|^=/', $s)
    ));

    preg_match_all('/\b[A-Z][a-z]{3,}\b|\b\d{4}\b/', $text, $m);
    $allKeywords = array_values(array_unique($m[0] ?? []));

    $questions = [];

    foreach ($sentences as $sentence) {
        if (count($questions) >= $count) break;

        preg_match_all('/\b[A-Z][a-z]{3,}\b|\b\d{4}\b/', $sentence, $matches);
        $words = array_values($matches[0] ?? []);
        if (empty($words)) continue;

        $answer = $words[array_rand($words)];
        $question = preg_replace('/\b' . preg_quote($answer, '/') . '\b/', '________', $sentence, 1);

        $distractors = array_values(array_filter($allKeywords, fn($w) => $w !== $answer));
        shuffle($distractors);
        $distractors = array_slice($distractors, 0, 3);

        if (count($distractors) < 3) continue;

        $choices = array_merge($distractors, [$answer]);
        shuffle($choices);

        $questions[] = [
            'question' => $question,
            'choices' => array_values($choices),
            'answer' => $answer
        ];
    }

    return response()->json(array_values($questions));
});


Route::get('/article/{title}', function ($title) {
    return view('article', ['title' => $title]);
})->name('article');

Route::get('/quiz/{title}', function ($title) {
    return view('quiz', ['title' => $title]);
})->name('quiz');
