@extends('scada.layout.index')
@section('css')
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto);

    body {
      font-family: Roboto, sans-serif;
    }

    #chart {
      /*max-width: 650px;
      margin: 35px auto;*/
      width: 1000px;
    }
</style>



<script type="text/javascript" src="scada/js/dashboard/apexcharts.js"></script>
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
                <div id="chart">
                  <apexchart ref="realtimeChart" type=line height=500 :options="chartOptions" :series="series" />
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
<script type="text/javascript" src="scada/js/dashboard/chartRealtime1.js"></script>
<script type="text/javascript" src="scada/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="scada/js/socket.io.dev.js"></script>


    <script>
        var socket = io('http://localhost:6001');
        socket.on('modbus',function(data) {
            console.log(data);
            // $('#pValue').text(data);
            //$('.cValue').text(data);
            $('#iValue'+ data.id).text(data.value);
            $('#iTime'+ data.id).text(data.time);
            if (data.id == 4) {
                //gauge1.update(data.value);
                yvalue = data.value;
            }
        })
    </script>
@endsection
