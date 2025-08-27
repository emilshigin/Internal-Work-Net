<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        // Delete existing buyers to reset ID counter
        // Avoid in production
        Buyer::truncate();

        // Create your company first
        Buyer::create([
            'name' => 'Micro Medical Device',
            // Add other fields here
        ]);

    }
}
