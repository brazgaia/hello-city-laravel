<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages/home')->name('home');
Route::view('/about-fr', 'pages/about')->name('about');
Route::view('/help', 'pages/help')->name('help');
