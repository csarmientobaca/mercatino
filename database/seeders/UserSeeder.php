<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed a few users
        User::create([
            'name' => 'carlos Doe',
            'email' => 'john@example.com',
            'last_name' => 'Doe',
            'place_in_map' => 'Location A',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'jill Smith',
            'email' => 'jane@example.com',
            'last_name' => 'Smith',
            'place_in_map' => 'Location B',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'last_name' => 'Doe',
            'place_in_map' => 'Location A',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'last_name' => 'Smith',
            'place_in_map' => 'Location B',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'last_name' => 'Doe',
            'place_in_map' => 'Location A',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'last_name' => 'Smith',
            'place_in_map' => 'Location B',
            'password' => Hash::make('password'),
        ]);

        // Add more users as needed
    }
}
