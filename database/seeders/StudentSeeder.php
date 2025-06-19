<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->count() === 0) {
            echo "Please run UserSeeder first.\n";
            return;
        }

        // Assign a user to each student
        foreach ($users->take(50) as $user) {
            Student::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
