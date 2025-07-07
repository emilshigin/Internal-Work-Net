<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['office_name'];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function productUnits()
    {
        return $this->hasMany(ProductUnit::class, 'current_office_id');
    }
    
    public function contactEmails()
    {
        return $this->morphMany(ContactEmail::class, 'contact');
    }

    public function contactPhones()
    {
        return $this->morphMany(ContactPhone::class, 'contact');
    }
}
