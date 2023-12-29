<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'      => fake()->RandomElement([
                'Drawing', 'Language & Speaking', 'Creative Writing',
                'Photography', 'Music', 'Dance', 'Acting', 'Cooking',
                'Public Speaking']
            ),
            'price'     => fake()->numberBetween(0, 100),
            'age_from'  => fake()->randomDigitNot(0),
            'age_to'    => fake()->randomDigitNot(0),
            'starts_at' => fake()->time('H:i'),
            'ends_at'   => fake()->time('H:i'),
            'capacity'  => fake()->numberBetween(20, 30),
            'image'     => fake()->randomElement(['classes-1.jpg', 'classes-2.jpg', 'classes-3.jpg', 'classes-4.jpg', 'classes-5.jpg', 'classes-6.jpg']),
            'teacher_id'=> fake()->numberBetween(1, 10),
        ];
    }
}
