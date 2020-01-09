<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    protected $table = "parents";
    public function children()
    {
		return $this->belongsTo('app\children','id_children','id');
    }
}
