<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    protected $table ='post2s';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function comments()
    {
    	return $this->hasMany('App\Comments1');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
