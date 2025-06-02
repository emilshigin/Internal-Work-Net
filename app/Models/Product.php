<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function currentOffice()
    {
        return $this->belongsTo(Office::class, 'current_office_id');
    }

    public function histories()
    {
        return $this->hasMany(ProductHistory::class);
    }
}
