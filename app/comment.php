<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    public function user()
	{
		return $this->belongsTo('app\user','id_user','id');
	}
	public function game()
	{
		return $this->belongsTo('app\user','id_game','id');
	}

}
