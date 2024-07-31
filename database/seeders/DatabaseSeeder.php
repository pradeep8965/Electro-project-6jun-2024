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
        User::factory()->create([
            'name' => 'Pradeep',
            'surname' => 'Prajapati',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin1@gmail.com'), // Hash the password
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Anil',
            'surname' => 'Sharma',
            'email' => 'customer1@gmail.com',
            'password' => bcrypt('customer1@gmail.com'), // Hash the password
            'role' => 'customer',
        ]);

        User::factory()->create([
            'name' => 'Abhishek',
            'surname' => 'Bairagi',
            'email' => 'customer2@gmail.com',
            'password' => bcrypt('customer2@gmail.com'), // Hash the password
            'role' => 'customer',
        ]);

        User::factory()->create([
            'name' => 'Rajveer',
            'surname' => 'Singh',
            'email' => 'customer3@gmail.com',
            'password' => bcrypt('customer3@gmail.com'), // Hash the password
            'role' => 'customer',
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
                'meta_value' => 'https://findvectorlogo.com/wp-content/uploads/2019/03/flipkart-vector-logo.png'
            ]
            
        ]);
    }
}




