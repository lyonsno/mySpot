<?php

namespace App;

use Illuminate\Database\Eloquent\Model;	

class Spot extends Model
{
    public function tags()
    {
    	return $this->hasMany('App\Tag');
    }

    public function lists()
    {
    	return $this->belongsToMany('App\List');
    }

    public function creator()
    {
    	return $this->belongsTo('App\User');
    }
}
