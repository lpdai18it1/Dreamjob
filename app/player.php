<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $table = "player";
    public function user()
    {
    	return $this->belongsTo('app\user','id_user','id');
    }
    public function game()
    {
    	return $this->belongsTo('app\game','id_game','id');
    }
}
