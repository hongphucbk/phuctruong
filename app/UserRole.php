<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_role";

    public function role()
    {
    	return $this->belongsTo('App\Role','role_id','id');
    }

    public function user_group()
    {
    	return $this->belongsTo('App\UserGroup','users_group_id','id');
    }
}
