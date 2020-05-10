<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

	protected $table = 'clubs';

    protected $fillable = [
    	'name',
    	'location';
    ];

    public function users(){

    	return $this->hasMany('App\User');
    }
}
