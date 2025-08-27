<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUnit extends Model
{
    use HasFactory;

    protected $fillable = [ 'product_id','serial_number', 'current_office_id'];
    // \App\Models\Office::find(1)->productUnits()->create(['product_id' => 5,'serial_number' => '50338','current_office_id' => 1]);


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
