<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments1 extends Model
{
    public function post2()
    {
    	return $this->belongsTo('App\Post2');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
