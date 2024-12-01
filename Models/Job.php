<?php

namespace App\Models;

class Job {
    public static function all(): array {
        return [
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
            
        ];
    }
}
