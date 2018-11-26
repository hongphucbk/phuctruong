<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpdeskAnswer extends Model
{
	protected $table = "helpdesk_answer";

    public function helpdesk_activity()
    {
    	return $this->hasOne('App\HelpdeskActivity','helpdesk_answer_id','id');
    }
}
