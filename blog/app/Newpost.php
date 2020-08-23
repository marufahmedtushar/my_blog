<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newpost extends Model
{
	protected $table ='newposts';
    public $primaryKey = 'id';
    public $timestamps = true;
    public function comments()
    {
    	return $this->hasMany('App\Newcomments');
    }

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
