<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $table = 'fines';

    protected $fillable = [

    	'user_id',
    	'range_id',
    	'amount',

    ];


    public function users(){

    	$this->belongsTo('App\User');
    }
}
