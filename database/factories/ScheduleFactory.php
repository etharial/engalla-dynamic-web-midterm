<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_week' => fake()->dayOfWeek(),
            'time_slot' => fake()->dateTimeBetween('8:00', '18:00'),
            'room' => 'Room ' . fake()->numberBetween(100, 499),
            'term' => fake()->numberBetween(1, 3),
            'course_id' => \App\Models\Course::factory(),
        ];
    }
}
