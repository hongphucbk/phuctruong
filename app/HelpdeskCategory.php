<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpdeskCategory extends Model
{
    protected $table = "helpdesk_category";

    public function helpdesk_question()
    {
    	return $this->hasMany('App\HelpdeskQuestion','helpdesk_category_id','id');
    }
}
