<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    public function user_role()
    {
    	return $this->hasMany('App\UserRole','role_id','id');
    }
}
