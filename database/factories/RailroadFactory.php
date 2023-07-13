<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railroad>
 */
class RailroadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake()->company(),
            'station_start' => fake()->city(),
            'station_arrive' => fake()->city(),
            'hour_start' => fake()->time(),
            'hour_arrive' => fake()->time(),
            'train_code' => fake()->numerify('code-####'),
            'carriage_number' => fake()->numberBetween(1, 20),
            'in_time' => fake()->boolean(),
            'cancelled' => fake()->boolean()
        ];
    }
}
