<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
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

        User::inRandomOrder()->take(7)->get()->each(function ($user) {
            Teacher::factory()->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
