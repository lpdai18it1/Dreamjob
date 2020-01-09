<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
	protected $table = "game"
	public function comment()
    {
    	return $this->hasMany('app\comment','id_game','id');
    }
    public function player()
    {
    	return $this->hasMany('app\player','id_game','id');
    }
}
