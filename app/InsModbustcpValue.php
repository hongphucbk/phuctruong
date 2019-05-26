<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsModbustcpValue extends Model
{
    protected $table = "ins_modbustcp_value";

    public function ins_modbustcp_parameter()
    {
    	return $this->belongsTo('App\InsModbustcpParameter','parameter_id','id');
    }
}
