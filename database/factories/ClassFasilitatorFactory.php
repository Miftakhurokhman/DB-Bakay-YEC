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
            "class_id"=>fake()->numberBetween(1,10),
            "fasil_id"=>fake()->numberBetween(1,10),
        ];
    }
}
