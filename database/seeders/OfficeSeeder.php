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
        $count = 250;
        $chunkSize = 100;

        $office = OfficeFactory::new()->count($count)->make();
        foreach($office->chunk($chunkSize) as $chunk){
            $data = $chunk->toArray();
            Office::insert($data);
        }

    }
}
