<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\InsModbustcpDevice;
use App\InsModbustcpParameter;
use App\InsModbustcpValue;
use App\Charts\Modbuschart;
use App\Charts\Modbuschart2;


use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ModbustcpExport;


use Carbon\Carbon;


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
			$values = InsModbustcpValue::where('parameter_id',$val->id)
						->latest()
						->take(50)
						//->orderby('created_at','asc')
						->get();
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
		$today = Carbon::now();
		return view('admin.apps.instrument.modbustcp.export.exp', compact('today'));
		//return Excel::download(new ModbustcpExport, 'Hihi.xlsx');
		//'return (new ModbustcpExport(2019))->download('Hihi.xlsx');

	}

	public function post_Export_Admin(Request $request)
	{
		$type = "xlsx";
        $today = Carbon::now();
        $ngay = $request->DateFind;
        $ngay2 = $request->DateFind2;
        $ngay =  Carbon::create(substr($ngay, 0, 4), substr($ngay, 5, 2), substr($ngay, 8, 2), 0, 0, 0);
        $ngay2 = Carbon::create(substr($ngay2, 0, 4), substr($ngay2, 5, 2), substr($ngay2, 8, 2), 23, 59, 59);

        $duoi1 = date('Ymd');
        $duoi2 = date('His');


		return (new ModbustcpExport($ngay,$ngay2 ))->download('Modbus TCP-'.$duoi1.'-'.$duoi2.'.xlsx');
	}
	

	public function get_Realtime_Admin()
	{
		return view('admin.apps.instrument.modbustcp.realtime.value');
	}

	public function post_Realtime_Admin()
	{
		$value = InsModbustcpValue::orderby('id', 'desc')->first()->value;
		return response()->json(array('msg'=> $value), 200);

	}

	//------------------------
	public function get_List()
	{
		$values = InsModbustcpValue::latest()->take(500)->get();
		return view('scada.modbustcp.value', compact('values'));
	}

	public function get_Chart()
	{
		$paras = InsModbustcpParameter::all();
		$chart = new Modbuschart;

		$data1 = collect([]);
		$data2 = collect([]);
		
		foreach ($paras as $key => $val) {
			$values = InsModbustcpValue::where('parameter_id',$val->id)
						->latest()
						->take(50)
						//->orderby('created_at','asc')
						->get();
			foreach ($values as $key => $value) {
				$data1->push($key);	
				$data2->push($value->value);
			}
			$chart->dataset($val->name, 'line', $data2);
		}
		
		$chart->labels($data1);

		return view('scada.modbustcp.chart.chart1', compact('chart'));
	}

	public function get_Chart_2_Highchart()
	{
		$paras = InsModbustcpParameter::all();
		$chart = new Modbuschart2;

		$data1 = collect([]);
		$data2 = collect([]);
		
		foreach ($paras as $key => $val) {
			$values = InsModbustcpValue::where('parameter_id',$val->id)
						->orderBy('id', 'desc')
						//->latest()
						->take(50)
						//->orderby('created_at','asc')
						->get()
						->reverse();
			foreach ($values as $key => $value) {
				$data1->push($key);	
				$data2->push($value->value);
			}
			$chart->dataset($val->name, 'line', $data2);
		}

		
		$chart->labels($data1);

		$chart->label("Độ C")
			  ->title("Nhiệt độ")	
			  ;
		$chart->options([
		    'tooltip' => [
		        'show' => true // or false, depending on what you want.
		    ],
		    'displayLegend' => true,
		]);
		$chart->legendDisplay(true);
		//$chart->displayAxes(false);
	
		return view('scada.modbustcp.chart.chart2', compact('chart'));
	}

	public function get_Export()
	{
		$today = Carbon::now();
		return view('scada.modbustcp.export.exp', compact('today'));
	}

	public function post_Export(Request $request)
	{
		$type = "xlsx";
        $today = Carbon::now();
        $ngay = $request->DateFind;
        $ngay2 = $request->DateFind2;
        $ngay =  Carbon::create(substr($ngay, 0, 4), substr($ngay, 5, 2), substr($ngay, 8, 2), 0, 0, 0);
        $ngay2 = Carbon::create(substr($ngay2, 0, 4), substr($ngay2, 5, 2), substr($ngay2, 8, 2), 23, 59, 59);

        $duoi1 = date('Ymd');
        $duoi2 = date('His');

		return (new ModbustcpExport($ngay,$ngay2 ))->download('Modbus TCP-'.$duoi1.'-'.$duoi2.'.xlsx');

	}

	public function get_Chart_Rt()
	{
		return view('scada.modbustcp.chart.chartRealtime');
	}


}
