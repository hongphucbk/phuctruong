<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = "users_group";

    public function users()
    {
    	return $this->hasMany('App\Users','users_group_id','id');
    }

    public function user_role()
    {
    	return $this->belongsTo('App\UserRole','users_group_id','id');
    }
}
