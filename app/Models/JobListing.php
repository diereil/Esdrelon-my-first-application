<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'salary', 'employer_id'];

    // employer relation
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    // ✅ add this many-to-many relationship
    public function tags()
    {
    return $this->belongsToMany(\App\Models\Tag::class, 'job_listing_tag', 'job_listing_id', 'tag_id');
    }
}
