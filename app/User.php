<?php

namespace CMS;

use Illuminate\Support\Facades\Hash;
use CMS\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $dates = ['logged_in_at', 'logged_out_at'];


    /**
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
