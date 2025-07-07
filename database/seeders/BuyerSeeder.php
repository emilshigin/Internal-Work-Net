<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Database\Factories\BuyerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'email' => 'support@micromedinc.com',
            'phone' => '(818)-222-3310'
            // Add other fields here
        ]);

    }
}
