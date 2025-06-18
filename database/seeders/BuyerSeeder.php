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
        $count = 200; // Number of users to create
        $chunkSize = 100; // Chunk size for inserting records
        $now = now();

        $buyers = Buyer::factory()->count($count)->make()->map(function ($buyer) use ($now) {
            $arr = $buyer->toArray();
            $arr['created_at'] = $now;
            $arr['updated_at'] = $now;
            return $arr;
        });

        foreach ($buyers->chunk($chunkSize) as $chunk) {
            Buyer::insert($chunk->toArray());
        }
    }
}
