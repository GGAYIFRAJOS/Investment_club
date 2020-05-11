<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Savings extends Model
{
    protected $table = 'savings';

    protected $fillable = [ 

    	'user_id',
    	'range_id',
    	'amount',
    	'date',
    	'balance',

    ];

    public function users(){

    	$this->belongsTo('App\User');
    }


    public function saving_range(){

    	$this->belongsTo('App\Saving_range');
    }
}
