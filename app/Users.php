<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public function group_user()
    {
    	return $this->belongsTo('App\UserGroup','group_user_id','id');
    }
}
