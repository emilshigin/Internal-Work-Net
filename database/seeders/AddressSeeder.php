<?php

namespace Database\Seeders;
use App\Models\ContactAddress;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete existing buyers to reset ID counter
        // Avoid in production
        ContactAddress::truncate();

        // Create your company first
        ContactAddress::create([
            'contact_type' => 'App\Models\Buyer',
            'contact_id' => 1,
            'label' => null,

            'address_line_1'=> '23945 Calabasas Rd',
            'address_line_2'=> '#110',

            'city' => 'Calabasas',
            'state' => 'CA',
            'postal_code' => '91302',
            'country' => 'US',
            'is_primary' => true,
            'is_contactable' => true,
        

        ]);
    }
}
