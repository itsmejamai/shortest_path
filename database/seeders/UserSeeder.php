<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'firstName' => 'Admin',
            'lastName' => 'User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'mobileNumber' => '1234567890',
            'role' => 'admin',
            'address' => 'Admin Address',
        ]);

        \App\Models\User::create([
            'firstName' => 'Rider',
            'lastName' => 'User',
            'email' => 'rider@example.com',
            'password' => bcrypt('password'),
            'mobileNumber' => '0987654321',
            'role' => 'rider',
            'address' => 'Rider Address',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
