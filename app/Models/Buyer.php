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
    
    // when buyer_id is deleted 
    public static function booted()
    {
        static::deleting(function ($buyer) {
            \App\Models\Office::where('buyer_id', $buyer->id)->update(['buyer_id' => 1]);
        });
    }


}
