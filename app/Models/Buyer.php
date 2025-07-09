<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function contactEmails()
    {
        return $this->morphMany(ContactEmail::class, 'contact');
    }

    public function contactPhones()
    {
        return $this->morphMany(ContactPhone::class, 'contact');
    }

    public function contactAddresses()
    {
        return $this->morphMany(ContactAddress::class, 'contact');
    }


    // Primery contact info
    public function getPrimaryEmailAttribute()
{
    return $this->contactEmails->where('is_primary', true)->first()?->email 
        ?? $this->contactEmails->first()?->email;
}

// Primary phone accessor
public function getPrimaryPhoneAttribute()
{
    return $this->contactPhones->where('is_primary', true)->first()?->phone_number 
        ?? $this->contactPhones->first()?->number;
}

    
    // when buyer_id is deleted 
    public static function booted()
    {
        static::deleting(function ($buyer) {
            \App\Models\Office::where('buyer_id', $buyer->id)->update(['buyer_id' => 1]);
        });
    }


}
