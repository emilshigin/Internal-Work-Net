<?php

namespace Database\Seeders;

use App\Models\ContactEmail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\PseudoTypes\True_;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactEmail::truncate();

        // Create your company first
        ContactEmail::create([
            'contact_type' => 'App\Models\Buyer',
            'contact_id' => 1,
            
            'email' => 'support@micromedinc.com',
            'name' => 'Support',
            'is_primary' => true,
            'is_contactable' =>  false,
        ]);   
        
        ContactEmail::create([
            'contact_type' => 'App\Models\Buyer',
            'contact_id' => 1,
            
            'email' => 'emilshigin@micromedinc.com',
            'name' => 'Support',
            'is_primary' => false,
            'is_contactable' =>  false,
        ]);    
    }
}
