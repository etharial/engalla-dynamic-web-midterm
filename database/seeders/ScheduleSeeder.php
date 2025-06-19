<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        if ($courses->count() === 0) {
            echo "Please run CourseSeeder first.\n";
            return;
        }

        foreach ($courses as $course) {
            Schedule::factory(rand(1, 3))->create([
                'course_id' => $course->id,
            ]);
        }
    }
}
