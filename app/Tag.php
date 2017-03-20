<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\

class Flag extends Model
{
    public funtion user_id()
    {
        return $this->hasOne('App\Tag');
    }
}