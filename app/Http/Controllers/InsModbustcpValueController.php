<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsModbustcpDevice;
use App\InsModbustcpParameter;
use App\InsModbustcpValue;
use App\Charts\Modbuschart;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ModbustcpExport;


class InsModbustcpValueController extends Controller
{
    public function get_List_Admin()
	{
		$values = InsModbustcpValue::all();

		return view('admin.apps.instrument.modbustcp.value.list', compact('values'));
	}

	

	public function get_Chart_Admin()
	{
		$paras = InsModbustcpParameter::all();


		
		$chart = new Modbuschart;

		$data1 = collect([]);
		$data2 = collect([]);

		
		
		foreach ($paras as $key => $val) {
			$values = InsModbustcpValue::where('parameter_id',$val->id)->get();
			foreach ($values as $key => $value) {
				$data1->push($key);	
				$data2->push($value->value);
			}
			$chart->dataset($val->name, 'line', $data2);
		}
		
		$chart->labels($data1);

		return view('admin.apps.instrument.modbustcp.chart.modbustcp', compact('chart'));
	}

	public function get_Export_Admin()
	{
		//return Excel::download(new ModbustcpExport, 'Hihi.xlsx');
		return (new ModbustcpExport(2019))->download('Hihi.xlsx');

	}

	public function get_Realtime_Admin()
	{

		return view('admin.apps.instrument.modbustcp.realtime.value');
		//$value = InsModbustcpValue::orderby('id', 'desc')->first()->value;
		//return response()->json(array('msg'=> $value), 200);

	}

	public function post_Realtime_Admin()
	{
		$value = InsModbustcpValue::orderby('id', 'desc')->first()->value;
		return response()->json(array('msg'=> $value), 200);

	}
	

}
