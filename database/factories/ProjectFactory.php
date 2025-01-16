<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'summary'=> $this->faker->paragraph(2),
            'description'=> $this->faker->paragraph(6),
            'tags'=> ['interests'=> $this->faker->word()],
            'developer_id'=> Developer::factory(),

        ];
    }
}
