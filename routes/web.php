<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home', ['heading' => 'Welcome to ReroWebsite']);
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => \App\Models\Job::with('employer')->paginate(9) // 9 per page for your 3-column grid
    ]);
});





// Single Job - dynamic
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'heading' => 'Job Detail',
        'job' => Job::find($id)
    ]);
});
