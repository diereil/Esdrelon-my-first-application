<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // add fields you need

    public function jobs()
    {
        return $this->hasMany(JobListing::class);
    }
}
