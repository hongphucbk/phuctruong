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
		// $devices = InsModbustcpDevice::all();
		// foreach ($devices as $key1 => $device) {
		// 	$parameters = InsModbustcpParameter::where('device_id', $device->id)->get();
		// }
		$parameters = InsModbustcpParameter::all();
		return view('scada.modbustcp.realtime.realtime', compact('parameters'));
	}

	public function post_Realtime()
	{
		$value = InsModbustcpValue::orderby('id', 'desc')->first()->value;
		return response()->json(array('msg'=> $value), 200);

	}

	public function get_Dashboard_Realtime()
	{
		
		$parameters = InsModbustcpParameter::all();
		return view('scada.modbustcp.dashboard.dashboard1', compact('parameters'));
	}

	
}
