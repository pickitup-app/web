<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Catalog;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Anna',
            'email' => 'anna@gmail.com',
            'password' => '12345678',
            'role' => 'admin',
            'phone_number' => '123412341234'
        ]);

        // Create more than one user
        User::factory()->create([
            'name' => 'Delbert',
            'email' => 'delbert@gmail.com',
            'password' => '12345678',
            'role' => 'driver',
            'phone_number' => '999999999999'
        ]);

        User::factory()->create([
            'name' => 'Jonathan',
            'email' => 'jonathan@gmail.com',
            'password' => '12345678',
            'role' => 'user',
            'phone_number' => '777777777777'
        ]);
    }
}
