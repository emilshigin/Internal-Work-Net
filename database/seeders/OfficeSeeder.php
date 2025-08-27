<?php

namespace Database\Seeders;

use App\Models\Office;
use Database\Factories\OfficeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Delete existing buyers to reset ID counter
        // Avoid in production
        Office::truncate();

        // Create your company first
        Office::create([
            'buyer_id' => 1,
            'office_name' => 'Test Office 2',
            // Add other fields here
        ]);
    }
}
