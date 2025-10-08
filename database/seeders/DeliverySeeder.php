<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Delivery::create([
            'user_id' => 2,
            'route_id' => 1,
            'pickup_location' => 'SM Megamall',
            'dropoff_location' => 'SM North Edsa',
            'delivery_status' => 'pending',
        ]);
    }
}
