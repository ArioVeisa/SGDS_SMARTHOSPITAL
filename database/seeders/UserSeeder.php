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
            'email' => 'admin@paw.com',
            'password' => bcrypt('password123')
        ]);
        $admin->assignRole('admin'); // assign role admin

        // Buat user Kontributor
        $kontributor = User::create([
            'name' => 'Contributor',
            'email' => 'contributor@paw.com',
            'password' => bcrypt('password123')
        ]);
        $kontributor->assignRole('Contributor'); // assign role kontributor

       
    }
}
