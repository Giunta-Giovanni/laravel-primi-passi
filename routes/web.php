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
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");
