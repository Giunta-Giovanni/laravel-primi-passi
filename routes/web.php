<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

Route::get('/', function () {
    $author = "Giovanni";
    $title = "Benvenuto nel sito di $author";
    $todayLessons = ["Framework", "Laravel", "Design Patterns", "MVC", "Composer", "Artisan", "Cli"];
    return view('home', compact('author', 'title', 'todayLessons'));
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");
