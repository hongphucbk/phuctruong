<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


use App\InsModbustcpDevice;
use App\InsModbustcpParameter;
use App\InsModbustcpValue;


class ModbustcpExport implements FromQuery, WithHeadings, WithMapping
{
	use Exportable;

    // public function view(): View
    // {
    //     return view('admin.apps.instrument.modbustcp.export.template', [
    //         'values' => InsModbustcpValue::all()
    //     ]);
    // }
    


    public function headings(): array
    {
        return [
            '#',
            'Device Name',
            'Parameter Name',
            'Value',
            'Display',
            'Note',
        ];
    }

    public function map($data): array
    {
        return [
            $data->id,
            $data->ins_modbustcp_parameter->ins_modbustcp_device->name,
            $data->ins_modbustcp_parameter->name,
            $data->value,
            $data->display,
            $data->note,
            //Date::dateTimeToExcel($invoice->created_at),
        ];
    }

	public function __construct($ngay, $ngay2)
    {
        $this->ngay = $ngay;
        $this->ngay2 = $ngay2;
    }

    public function query()
    {
        return InsModbustcpValue::query()->where('created_at','>=',$this->ngay)
                                         ->where('created_at','<=',$this->ngay2);
    }
}
