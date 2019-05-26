<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsModbustcpDevice extends Model
{
    protected $table = "ins_modbustcp_device";

    public function ins_modbustcp_parameter()
    {
    	return $this->hasMany('App\InsModbustcpParameter','device_id','id');
    }
}
