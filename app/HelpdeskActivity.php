<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpdeskActivity extends Model
{
    protected $table = "helpdesk_activity";

    public function helpdesk_question()
    {
    	return $this->belongsTo('App\HelpdeskQuestion','helpdesk_question_id','id');
    }

    public function helpdesk_answer()
    {
    	return $this->belongsTo('App\HelpdeskAnswer','helpdesk_answer_id','id');
    }
}
