<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductUnit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            BuyerSeeder::class,
            OfficeSeeder::class,
            ProductSeeder::class,
            ProductUnitSeeder::class,
        ]);

        //  User::factory()->create([
        //     'name' => 'ADMIN',
        //     'username' => 'admin',
        //     'email' => 'admin@micromedinc.com',
        //     'password' => 'admin!?'
        // ]);
    }
}
