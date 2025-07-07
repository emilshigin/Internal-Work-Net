<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{

    protected $guarded = [];

    public function contact()
    {
        return $this->morphTo();
    }
}
