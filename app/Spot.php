<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\

class Spot extends Model
{
    public funtion phone()
    {
        return $this->hasOne('App\Tag');
    }
    
}
