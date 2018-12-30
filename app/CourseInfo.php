<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    protected $table = "course_info";

    public function helpdesk_question()
    {
    	return $this->belongsTo('App\HelpdeskQuestion','helpdesk_question_id','id');
    }
}
