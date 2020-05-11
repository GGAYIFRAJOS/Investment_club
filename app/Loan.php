<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';

    protected $fillable = [

    	'user_id',
    	'amount',
    	'interest',
    	'interest_amount',
    	'total_amount',
    	'loan_date',

    ];

    public function(){

    	$this->belongsTo('App\User');
    }

    public function loan_progress(){

        $this->hasMany('App\Loan_progress');
    }

    public function loan_range(){

        $this->hasMany('App\Loan_range');
    }
}
