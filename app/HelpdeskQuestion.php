<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpdeskQuestion extends Model
{
    protected $table = "helpdesk_question";

    public function helpdesk_catogery()
    {
    	return $this->belongsTo('App\HelpdeskCategory','helpdesk_category_id','id');
    }

    public function helpdesk_activity()
    {
    	return $this->hasOne('App\HelpdeskActivity','helpdesk_question_id','id');
    }
}
