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
            <h3 class="text-themecolor m-b-0 m-t-0"><a href="scada/modbustcp/chart"> Chart 1</a> <a href="scada/modbustcp/chart/2"> Chart 2</a></h3>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!-- <div class="card-header bg-info">
                                    <h4 class="m-b-0 text-white">CHART</h4>
                                </div> -->
                                <div class="card-body">
                                    {!! $chart->container() !!} 
                                </div>
                            </div>
                        </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>  
    {!! $chart->script() !!}

@endsection
