<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'      =>  fake()->name(),
            'job_title' => fake()->jobTitle(),
            'image'     => fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
            'is_popular'=> fake()->numberBetween(0, 1),
        ];
    }
}
