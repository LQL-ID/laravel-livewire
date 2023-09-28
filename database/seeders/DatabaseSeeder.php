<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'dayCod',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Comment::create([
            'body' => fake()->sentence(30),
            'user_id' => $user->id
        ]);
    }
}
