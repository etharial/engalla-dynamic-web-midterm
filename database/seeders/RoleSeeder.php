<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'Teacher', 'Student'];

        foreach ($roles as $role) {
            Role::factory()->create([
                'role_name' => $role,
            ]);
        }
    }
}
