<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parent extends Model
{
    protected $table = "parent";
    public function children()
    {
		return $this->belongsTo('app\children','id_children','id');
    }
}
