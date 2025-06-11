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
        $count = 200000; // Number of users to create
        $chunkSize = 1000; // Chunk size for inserting records

        $users = BuyerFactory::new()->count($count)->make();
        foreach ($users->chunk($chunkSize) as $chunk) {
                $data = $chunk->toArray();
                Buyer::insert($data);
            }
    }
}
