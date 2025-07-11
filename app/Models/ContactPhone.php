<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPhone extends Model
{
    protected $fillable = ['phone_number', 'name', 'label', 'is_primary', 'is_contactable'];
    // If you want to insert a phone number manuly:
    // \App\Models\Office::find(1)->contactPhones()->create(['phone_number' => '555-123-4567', 'name' => 'Front Desk', 'label' => 'Main Line', 'is_primary' => true, 'is_contactable' => true]);


    public function contact(){
        return $this->morphTo();
    }
}
