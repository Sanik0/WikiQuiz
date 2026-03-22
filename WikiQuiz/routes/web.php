<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');
Route::get('/article/{title}', function ($title) {
    return view('article', ['title' => $title]);
})->name('article');
