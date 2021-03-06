<?php

namespace App;

use Illuminate\Database\Eloquent\Model;	

class Spot extends Model
{
    protected $fillable = [
        'name', 'longitude', 'latitude', 'addres', 'notes',
    ];

    public function compilations()
    {
    	return $this->belongsToMany('App\Compilation')->withTimestamps();
    }

    public function creator()
    {
    	return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

}
