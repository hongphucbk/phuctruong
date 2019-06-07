<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsModbustcpDevice;
use App\InsModbustcpParameter;
use App\InsModbustcpValue;
use App\Charts\Modbuschart;
use App\Charts\Modbuschart2;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ModbustcpExport;
use Carbon\Carbon;

class InsModbustcpRealtime extends Controller
{
    public function get_Realtime()
	{
		return view('scada.modbustcp.realtime.realtime');
	}

	public function post_Realtime()
	{
		$value = InsModbustcpValue::orderby('id', 'desc')->first()->value;
		return response()->json(array('msg'=> $value), 200);

	}
}
