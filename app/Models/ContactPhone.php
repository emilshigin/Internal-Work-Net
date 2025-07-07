<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPhone extends Model
{
    public function contact(){
        return $this->morphTo();
    }
}
