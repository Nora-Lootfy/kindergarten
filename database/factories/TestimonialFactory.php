<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'      => fake()->name(),
            'job'       =>  fake()->jobTitle(),
            'image'	    =>	fake()->randomElement(['testimonial-1.jpg', 'testimonial-2.jpg', 'testimonial-3.jpg']),
            'comment'   => fake()->text(),
            'published' =>	fake()->numberBetween(0, 1),

        ];
    }
}
