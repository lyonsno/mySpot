<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
	public function owner()
	{
		return $this->hasOne('App\Users');
	}

	public function spots()
	{
		return $this->belongsToMany('App\Spots');
	}
}
