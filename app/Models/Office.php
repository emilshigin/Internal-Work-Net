<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function productUnits()
    {
        return $this->hasMany(ProductUnit::class, 'current_office_id');
    }
    
}
