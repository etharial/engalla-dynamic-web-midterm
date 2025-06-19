<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Student;
use app\Models\Course;

class StudentSeeder extends Seeder
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

        Student::factory(15)->create()->each(function ($student) use ($courses) {
            $student->courses()->attach($courses->random(rand(2, 4))->pluck('id'));
        });
    }
}
