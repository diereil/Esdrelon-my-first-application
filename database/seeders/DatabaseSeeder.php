<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), 
        ]);

     
        $employers = Employer::factory(5)->create();

      
        $tags = Tag::factory(10)->create();

     
        Job::factory(20)->create([
            'employer_id' => $employers->random()->id,
        ])->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
