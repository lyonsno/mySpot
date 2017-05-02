<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tags');
    }

    public function lists()
    {
    	return $this->belongsToMany('App\Lists');
    }
}
