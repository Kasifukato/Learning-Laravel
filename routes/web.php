<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs'=> Job::all()
        
    ]); 
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {
    
    $job = Job::find($id);
    //dump and die
    // dd($job);

    return view('job',['job'=> $job]);

});
