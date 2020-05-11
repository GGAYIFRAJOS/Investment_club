<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_range extends Model
{
    protected $table = 'loan_range';

    protected $fillable = [

    	'user_id',
    	'loan_range',
    	'range',
    	'amount_due',

    ];

    public function loans(){

    	$this->belongsTo('App\Loan');
    }
}
