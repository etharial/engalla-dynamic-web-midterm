<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Admin', 'description' => 'Administrator access'],
            ['role_name' => 'Teacher', 'description' => 'Faculty member'],
            ['role_name' => 'Student', 'description' => 'Enrolled learner'],
        ];

        foreach ($roles as $roleData) {
            Role::firstOrCreate(
                ['role_name' => $roleData['role_name']],
                $roleData
            );
        }
    }
}
