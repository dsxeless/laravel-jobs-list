<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

use function Psy\bin;

Route::get('/', function () { 
    return view('home'); 
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    
    $job = Arr::first(Job::all(), function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', [
        'job' => $job,
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function () { 
    return view('contacts'); 
});

