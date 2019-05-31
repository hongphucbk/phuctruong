<!DOCTYPE html>
<html>
<head>
	<title>MODBUS</title>
</head>
<body>
	<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Device Name</th>
        <th>Parameter Name</th>
        <th>Value</th>
        <th>Time</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    @foreach($values as $key => $val)
        <tr>
            <td>{{ $val->id }}</td>
            <td>{{ $val->ins_modbustcp_parameter->ins_modbustcp_device->name }}</td>
            <td>{{ $val->ins_modbustcp_parameter->name }}</td>
            <td>{{ $val->value }}</td>
            <td>{{ $val->created_at }}</td>
            <td>{{ $val->note }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>



