<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

use function Psy\bin;

Route::get('/', function () { 
    $job = Job::all(); 

    dd($job);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', [
        'job' => $job,
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function () { 
    return view('contacts'); 
});

