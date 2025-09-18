<?php

namespace App\Models;

class Job
{
    public static function all()
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => '$50,000', 'type' => 'Management'],
            ['id' => 2, 'title' => 'Programmer', 'salary' => '$10,000', 'type' => 'Technical'],
            ['id' => 3, 'title' => 'Teacher', 'salary' => '$40,000', 'type' => 'Education'],
            ['id' => 4, 'title' => 'Designer', 'salary' => '$30,000', 'type' => 'Creative'],
            ['id' => 5, 'title' => 'Marketing Manager', 'salary' => '$45,000', 'type' => 'Marketing'],
        ];
    }

    public static function find($id)
    {
        $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) abort(404);
        return $job;
    }
}
