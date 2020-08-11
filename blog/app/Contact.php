<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contact_list';
    public $primaryKey = 'id';
    public $timestamps = true;
}
