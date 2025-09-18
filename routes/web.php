<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home', ['heading' => 'Welcome to ReroWebsite']);
});

// Jobs List (dynamic)
Route::get('/jobs', function () {
    return view('jobs', [
        'heading' => 'Jobs Page',
        'jobs' => Job::all()
    ]);
});

// Single Job - dynamic
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'heading' => 'Job Detail',
        'job' => Job::find($id)
    ]);
});
