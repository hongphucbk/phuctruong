<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = "users_group";

    public function users()
    {
    	return $this->hasMany('App\Users','group_user_id','id');
    }
}
