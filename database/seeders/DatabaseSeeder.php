<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'person2',
            'surname' => 'surname2',
            'email' => 'admin6@gmail.com',
            'password' =>bcrypt('admin6@gmail.com'), // Hash the password
            'role' => 'admin',

        ]);
    }
}
