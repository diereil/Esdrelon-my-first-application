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
        // 1. Default user for login
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // login with "password"
        ]);

        // 2. Employers
        $employers = Employer::factory(5)->create();

        // 3. Tags
        $tags = Tag::factory(10)->create();

        // 4. Jobs with employer and tags
        Job::factory(20)->create([
            'employer_id' => $employers->random()->id,
        ])->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
