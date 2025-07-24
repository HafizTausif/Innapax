<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Ensure admin role exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        
        // Create or update admin user
        $admin = User::updateOrCreate(
            ['email' => 'admin@innapax.com'],
            [
                'username' => 'admin',
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // Change to secure password
                'birthday' => '1980-01-01',
                'gender' => 'male',
                'looking_for' => 'female',
                'marital_status' => 'Single',
                'city' => 'Admin City',
            ]
        );

        // Assign admin role if not already assigned
        if (!$admin->roles()->where('name', 'admin')->exists()) {
            $admin->roles()->attach($adminRole);
        }

        $this->command->info('Admin user created/updated successfully!');
    }
}