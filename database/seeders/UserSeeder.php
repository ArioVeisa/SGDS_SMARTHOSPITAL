<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Buat user Admin
         $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123')
        ]);
        $admin->assignRole('admin'); // assign role admin

        // Buat user Kontributor
        $kontributor = User::create([
            'name' => 'Kontributor',
            'email' => 'kontributor@example.com',
            'password' => bcrypt('password123')
        ]);
        $kontributor->assignRole('kontributor'); // assign role kontributor

        // Buat user Public 
        $pengguna = User::create([
            'name' => 'Public User',
            'email' => 'user@example.com',
            'password' => bcrypt('password123')
        ]);
        $pengguna->assignRole('public'); // assign role public 
    }
}
