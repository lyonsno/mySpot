<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compilation extends Model
{
	public function owner()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function spots()
	{
		return $this->belongsToMany('App\Spot')->withTimestamps();
	}

	public function followers()
	{
		return $this->belongsToMany('App\User')->withPivot('compilation_user')->withTimestamps();
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	}
}
