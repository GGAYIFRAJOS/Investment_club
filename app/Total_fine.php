<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total_fine extends Model
{
    protected $table = 'total_fines';

    protected $fillable = [

    	'user_id',
    	'total_amount',

    ];

    public function users(){
    	$this->belongsTo('App\User');
    }
}
