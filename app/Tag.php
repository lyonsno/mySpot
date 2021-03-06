<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = [
		'text', 
	];
	
    public function compilations()
    {
        return $this->belongsToMany('App\Compilation')->withPivot('compilation_tag')->withTimestamps();
    }

    public function creator()
    {
	    return $this->belongsTo('App\User');
    }
}