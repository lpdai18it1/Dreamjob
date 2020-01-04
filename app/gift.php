<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gift extends Model
{
	protected $table = "gift";
	public function send_gift()
	{
    	return $this->belongsTo('app\send_gift','id_gift','id');
	}
}
