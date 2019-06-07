@extends('scada.layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


@endsection
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Row Data</h3>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
        </div>
        <!-- <div class="col-md-6 col-4 align-self-center">
            <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> Upgrade to Pro</a>
        </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <!-- <h4 class="card-title">Basic Table</h4>
                    <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                    <div class="table-responsive">
                        <table id="table_id" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Device Name</th>
                                    <th>Parameter Name</th>
                                    <th>Value</th>
                                    <th>Time</th>
                                    <th>Note</th>

                                    <!-- <th>Edit</th>
                                    <th>Delete</th> -->
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

                                    <!-- <td>
                                        <a href="admin/app/modbustcp/device/edit/{{$val->id}}" class="btn btn-info">
                                            <span class="glyphicon glyphicon-edit"></span>
                                            <span>Edit</span>            
                                        </a>
                                    </td>
                                    <td>
                                        <a href="admin/app/modbustcp/device/delete/{{$val->id}}" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span>
                                            <span>Delete</span>            
                                        </a>
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>

@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

@endsection
