<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clear existing
        Product::truncate();

        // list of device
        $products = [
            ['name' => 'Focus'],
            ['name' => 'G2'],
            ['name' => 'Neo 2'],
            ['name' => 'G3'],
            ['name' => 'Neo 3'],
        ];

        // Create device
        foreach($products as $product){
            Product::create($product);
        }

    }
}
