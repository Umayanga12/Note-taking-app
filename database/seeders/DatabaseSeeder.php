<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            "name" => "Test User",
            "email" => "unique" . Str::random(5) . "@example.com", // unique email
            "email_verified_at" => now(),
            "password" => bcrypt("password"), // or use Hash::make
            "remember_token" => Str::random(10),
        ]);

        Note::factory()->count(100)->create();
    }
}
