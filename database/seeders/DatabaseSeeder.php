<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class, // Buat role terlebih dahulu
            UserSeeder::class, // Assign role ke user
        ]);
    }
}
