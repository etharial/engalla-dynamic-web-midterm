<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subject = fake()->words(rand(1, 2), true);
        return [
            'subject' => $subject,
            'course_code' => strtoupper(fake()->bothify('CS###')),
            'credits' => fake()->numberBetween(1, 4),
            'description' => fake()->sentence(rand(1, 5)),
        ];
    }
}
