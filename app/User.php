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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lists()
    {
        return $this->belongsToMany('App\Compilation')->withPivot('privileges');
    }

    public function createdLists()
    {
        return $this->hasMany('App\Compilation');
    }

    public function createdSpots()
    {
        return $this->hasMany('App\Spot');
    }



}
