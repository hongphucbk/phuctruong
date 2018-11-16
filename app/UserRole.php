<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_role";

    public function roles()
    {
    	return $this->hasMany('App\Roles','role_id','id');
    }

    public function user_group()
    {
    	return $this->hasMany('App\UserGroup','group_user_id','id');
    }
}
