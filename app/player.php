<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $table = "player";
    public function User()
    {
    	return $this->belongsTo('app\User','id_user','id');
    }
}
