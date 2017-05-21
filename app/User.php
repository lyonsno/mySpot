<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function createdCompilations()
    {
        return $this->hasMany('App\Compilation', 'user_id', 'user_id');
    }

    public function createdSpots()
    {
        return $this->hasMany('App\Spot');
    }

    public function watchedCompilations()
    {
        return $this->belongsToMany('App\Spot')->withPivot('compilation_user')->withTimestamps();
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }



}
