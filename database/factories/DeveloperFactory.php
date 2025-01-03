<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'level'=> fake()->numberBetween(0,10),
            'interests'=> json_encode(fake()->words(2)),
            'profession' => fake()->randomElement(['junior','senior', 'intermediate'])
        ];
    }
}
