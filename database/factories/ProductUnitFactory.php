<?php

namespace Database\Factories;

use App\Models\Office;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductUnit>
 */
class ProductUnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
         $prefixMap = [
                1 => '20',
                2 => '30',
                3 => '40',
                4 => '32',
                5 => '50',
            ];

        $product_id =  Product::inRandomOrder()->value('id');
        $prefix = $prefixMap[$product_id] ?? '99';

        return [
            'product_id' => $product_id,
            'serial_number' => $prefix . fake()->unique()->numerify('###'),
            'current_office_id' => Office::inRandomOrder()->value('id'),
        ];
    }


}
