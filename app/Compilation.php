<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compilation extends Model
{
	public function owner()
	{
		return $this->belongsTo('App\User');
	}

	public function spots()
	{
		return $this->belongsToMany('App\Spot');
	}

	public function users()
	{
		return $this->belongsToMany('App\User')->withPivot('privileges');
	}
}
