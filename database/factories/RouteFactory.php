<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_point' => fake()->city(),
            'end_point' => fake()->city(),
            'shortest_path' => fake()->streetName(),
            'distance' => fake()->randomFloat(2, 1, 100),
            'travel_time' => fake()->numberBetween(10, 120) . ' minutes',
        ];
    }
}
