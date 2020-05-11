<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $table = 'balances';

    protected $fillable = [

    	'user_id',
    	'range_id',
    	'amount',

    ];


    public function users(){

    	$this->belongsTo('App\User');
    }
}
