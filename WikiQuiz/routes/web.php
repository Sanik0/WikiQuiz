<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/article/{title}', function ($title) {
    return view('article', ['title' => $title]);
})->name('article');

Route::get('/quiz/{title}', function ($title) {
    return view('quiz', ['title' => $title]);
})->name('quiz');