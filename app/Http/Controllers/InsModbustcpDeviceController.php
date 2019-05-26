<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsModbustcpDevice;
use App\InsModbustcpParameter;
use App\InsModbustcpValue;

class InsModbustcpDeviceController extends Controller
{
	public function get_List_Admin()
	{
		$devices = InsModbustcpDevice::all();
		return view('admin.apps.instrument.modbustcp.device.list', compact('devices'));
	}

	public function get_Add_Admin()
	{
		return view('admin.apps.instrument.modbustcp.device.add');
	}

	public function post_Add_Admin(Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
            'IPaddress' => 'required',
        ],
        [
            'name.required'=>'Please input name',
            'IPaddress.required'=>'Please input IP address',
        ]);

		$device = new InsModbustcpDevice;
		$device->name = $request->name;
		$device->IPaddress = $request->IPaddress;
		$device->note = $request->note;

		$device->save();
		return redirect()->back()->with('notification','Add successfully');
	}
    
}
