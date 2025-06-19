<?php

namespace App\Models;
use Illuminate\Support\Arr;


class Job{
    public static function all():array   {

        return  [ 
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

    }

    public static function find(int $id):array 
    {
        
        $job= Arr::first(static::all(),fn($job) => $job['id']== $id);

        if(!$job){
            abort(404);
        }
    }
}