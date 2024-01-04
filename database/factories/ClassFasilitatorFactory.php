<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassFasilitator>
 */
class ClassFasilitatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            "classID"=>fake()->numberBetween(1,10),
            "fasilID"=>fake()->numberBetween(1,10),
        ];
    }
}