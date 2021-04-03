<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
  return view('pages/home');
});

Route::get('/about-fr', function() {
  return view('pages/about');
});
