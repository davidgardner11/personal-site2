<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('about', 'pages.about')->name('about');
Route::view('blog', 'pages.blog')->name('blog');