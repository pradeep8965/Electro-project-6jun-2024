<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SystemInfo;
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
        SystemInfo::insert([
            [
                'meta_name' => 'app_name',
                'meta_value' => 'Flipkart'
            ],
            [
                'meta_name' => 'app_version',
                'meta_value' => '1.0.0'
            ],
            [
                'meta_name' => 'app_logo',
                'meta_value' => 'https://i0.wp.com/zeevector.com/wp-content/uploads/Flipkart-Logo-Vector.png?fit=737%2C195&ssl=1'
            ]

        ]);
    }
}
