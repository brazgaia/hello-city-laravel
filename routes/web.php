<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
  return view('home');
});

Route::get('/about-fr', function() {
  return view('about');
});
