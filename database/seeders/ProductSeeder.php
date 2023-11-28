<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Seed products for user with ID 3

        Product::create([
            'user_id' => 3,
            'name' => 'Product 11',
        ]);

        Product::create([
            'user_id' => 4,
            'name' => 'Product 211',
        ]);

        // Add more products as needed
    }
}
