<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $author = "Giovanni";
    $title = "Benvenuto nel sito di $author";
    $todayLessons = ["Framework", "Laravel", "Design Patterns", "MVC", "Composer", "Artisan", "Cli"];
    return view('home', [
        'author' => $author,
        'title' => $title,
        'todayLessons' => $todayLessons,
    ]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
