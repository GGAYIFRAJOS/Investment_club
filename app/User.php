<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact','residence',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function clubs(){

        $this->belongsTo('App\Club');
    }

    public function roles(){

        $this->belongsTo('App\Role');
    }

    public function savings(){

        $this->hasMany('App\Saving');
    }

    public function loans(){
        $this->hasMany('App\Loan');
    }

    public function balances(){

        $this->hasMany('App\Balance');
    }

    public function fines(){
        
        $this->hasMany('App\Fine');
    }

    

    public function(){
        $this->hasOne('App\Total_balance');
    }


    public function(){
        $this->hasOne('App\Total_fine');
    }
}
