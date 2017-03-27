<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\

class Tag extends Model
{
    public function spots()
    {
        return $this->belongsToMany('App\Spots');
    }
}