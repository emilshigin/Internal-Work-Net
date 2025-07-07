<?php

namespace Database\Seeders;

use App\Models\ContactPhone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactPhone::truncate();

        ContactPhone::create([
            'contact_type' => 'App\Models\Buyer',
            'contact_id' => 1,
            
            'phone_number' => '818-222-3310',
            'name' => 'Support',
            'label' => null,
            'is_primary' => true,
            'is_contactable' =>  false,
        ]);

    }
}
