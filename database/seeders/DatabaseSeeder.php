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
            'name' => 'pradeep',
            'surname' => 'prajapati',
            'email' => 'admin1@gmail.com',
            'password' =>bcrypt('admin1@gmail.com'), // Hash the password
            'role' => 'admin',

        ]);
    }
}
