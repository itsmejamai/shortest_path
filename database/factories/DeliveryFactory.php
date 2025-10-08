<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'route_id' => Route::factory(),
            'pickup_location' => fake()->address(),
            'dropoff_location' => fake()->address(),
            'delivery_status' => fake()->randomElement(['pending', 'in-transit', 'delivered']),
        ];
    }
}
