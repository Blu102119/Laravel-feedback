<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Feedback;

class FeedbacksTableSeeder extends Seeder
{
    public function run()
    {
        // Method 1 - Seed the users table using models
        \App\Models\Feedback::factory(20)->create(); //10 random data

        \App\Models\Feedback::factory()->create([ //specific data
            'name' => 'John DoeS',
            'email' => 'johndoeSSS@example.com',
            'phone_number' => '555-1234',
            'message' => 'Great app, keep up the good work!'
        ]);
    }
}
