<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs'=> [ 
        [
            'id' => 1,
            'title' => 'FullStack Developer',
            'salary'=> 'Rs. 40000'
        ],
        [
            'id' => 2,
            'title' => 'UI/UX Developer',
            'salary'=> 'Rs. 50000'
        ],
        [
            'id' => 3,
            'title' => ' Laravel Developer',
            'salary'=> 'Rs. 80000'
        ]
    ]
    ]); 
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {
    

     $jobs = [ 
        [
            'id' => 1,
            'title' => 'FullStack Developer',
            'salary'=> 'Rs. 40000'
        ],
        [
            'id' => 2,
            'title' => 'UI/UX Developer',
            'salary'=> 'Rs. 50000'
        ],
        [
            'id' => 3,
            'title' => ' Laravel Developer',
            'salary'=> 'Rs. 80000'
        ]
        ];

    $job = Arr::first($jobs,fn($job) => $job['id']== $id);
    //dump and die
    // dd($job);

    return view('job',['job'=> $job]);

});
