<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Route::create([
            'start_point' => 'Manila',
            'end_point' => 'Quezon City',
            'shortest_path' => 'EDSA',
            'distance' => 15.5,
            'travel_time' => '30 minutes',
        ]);
    }
}
