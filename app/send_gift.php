<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class send_gift extends Model
{
    protected $table = "send_gift";
    public function children()
    {
    	return $this->belongsTo('App\children','id_children','id');
    }
    public function gift()
    {
    	return $this->belongsTo('App\gift','id_gift','id');
    }

}
