<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_progress extends Model
{
    protected $table = 'loan_progress';

    protected $fillable = [

    	'loan_id',
    	'loan_range',
    	'amount_forward',
    	'amount_paid',
    	'balance',
    	'fine',
    	'interest',
    	'total_owed',

    ];


     public function loans(){
    	$this->belongsTo('App\Loan');
    }
}
