<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('about');
});
