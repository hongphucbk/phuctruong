<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsModbustcpParameter extends Model
{
    protected $table = "ins_modbustcp_parameter";

    public function ins_modbustcp_device()
    {
    	return $this->belongsTo('App\InsModbustcpDevice','device_id','id');
    }

    public function ins_modbustcp_value()
    {
    	return $this->hasMany('App\InsModbustcpValue','parameter_id','id');
    }
}
