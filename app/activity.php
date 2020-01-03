<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    protected $table ="activity";
   	public function children()
    {
    	return $this->hasMany('app\children','id_children','id');
    }
}
