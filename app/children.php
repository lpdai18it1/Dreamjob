<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children extends Model
{
	protected $table = "children";
	public function activity()
	{
		return $this->belongsTo('app\activity','id_childen','id');
	}
	public function send_gift()
	{
		return $this->belongsTo('app\send_gift','id_childen','id');
	}
	public function chart()
	{
		return $this->belongsTo('app\chart','id_childen','id');
	}
	public function parent()
	{
		return $this->hasMany('app\parent','id_children','id');
	}
}
