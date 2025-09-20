<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    // One-to-Many: Job belongs to Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    // Many-to-Many: Job has many Tags
    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'job_listing_tag', 'job_listing_id', 'tag_id');
    }
}
