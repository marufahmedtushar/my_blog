<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newcomments extends Model
{
   public function post()
    {
    	return $this->belongsTo('App\Newpost');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
