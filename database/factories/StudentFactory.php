<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'program' => fake()->randomElement(['BSCS', 'BSIT', 'BSIS']),
            'enrollment_year' => fake()->year(),
            'birthday' => fake()->date('Y-m-d', '-18 years'),
            'user_id' => User::factory(),
        ];
    }
}
