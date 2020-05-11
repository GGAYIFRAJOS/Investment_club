<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total_balance extends Model
{
    protected $table = 'total_balances';

    protected $fillable = [

    	'user_id',
    	'total_amount',

    ];

    public function users(){
    	
    	$this->belongsTo('App\User');
    }
}
