<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserClass>
 */
class UserClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id"=>fake()->numberBetween(1,3),
            "class_id"=>fake()->numberBetween(1,10),
            "progress"=>fake()->numberBetween(0,100),
        ];
    }
}
