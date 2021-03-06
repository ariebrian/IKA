<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'no_identitas', 
        'nama',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function mahasiswa()
    {
        return $this->hasOne('App\Mahasiswa');
    }

    public function forum()
    {
        return $this->hasMany('App\Forum');
    }

    public function reply()
    {
        return $this->hasMany('App\Reply');
    }
}
