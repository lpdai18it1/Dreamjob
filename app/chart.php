<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
	protected $table = "chart";
   	public function children()
    {
    	return $this->hasMany('app\children','id_children','id');
    }
}
