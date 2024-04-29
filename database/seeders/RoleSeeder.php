<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Example roles
        Role::create([
            'name' => 'Admin',
        ]);

        Role::create([
            'name' => 'Employee',
        ]);

        // Add more roles as needed
    }
}
