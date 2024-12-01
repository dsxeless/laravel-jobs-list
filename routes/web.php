<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use function Psy\bin;

Route::get('/', function () { 
    return view('home'); 
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50000'
            ],

            [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$40000'
            ],

            [
            'id' => 3,
            'title' => 'Manager',
            'salary' => '$35000'
            ],
            
        ]
    ]); 
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
        'id' => 1,
        'title' => 'director',
        'salary' => '$50000'
        ],

        [
        'id' => 2,
        'title' => 'developer',
        'salary' => '$40000'
        ],

        [
        'id' => 3,
        'title' => 'manager',
        'salary' => '$35000'
        ],
        
    ];

    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', [
        'job' => $job,
        'jobs' => $jobs
    ]);
});

Route::get('/contact', function () { 
    return view('contacts'); 
});

