<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController; // ✅ add this line
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home', ['heading' => 'Welcome to ReroWebsite']);
});

Route::resource('jobs', JobController::class);
