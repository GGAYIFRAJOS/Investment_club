<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving_range extends Model
{
    protected $table = 'savings_range';

    protected $fillable = [ 

    	'range_description';

    ];


    public function savings(){

    	$this->hasMany('App\Saving');
    }


}
