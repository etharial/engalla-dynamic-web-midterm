<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;
use app\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();

        if ($roles->count() === 0) {
            echo "Please run RoleSeeder first.\n";
            return;
        }

        User::factory(10)->create()->each(function ($user) use ($roles) {
            $user->roles()->attach($roles->random()->id);
        });
    }
}
