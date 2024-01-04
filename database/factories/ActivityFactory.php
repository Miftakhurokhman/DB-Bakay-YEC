<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_id' => fake()->numberBetween(1, 10),
            'activity_number' => fake()->numberBetween(1,4),
            'activity_name' => fake()->sentence(mt_rand(3, 8))
        ];
    }
}
