@extends('scada.layout.index')
@section('css')
<style type="text/css">
    .outer {
    width: 600px;
    height: 200px;
    margin: 0 auto;
    }
    .outer .chart-container {
        width: 300px;
        float: left;
        height: 200px;
    }
    .highcharts-yaxis-grid .highcharts-grid-line {
        display: none;
    }

    @media (max-width: 600px) {
        .outer {
            width: 100%;
            height: 400px;
        }
        .outer .chart-container {
            width: 300px;
            float: none;
            margin: 0 auto;
        }
    }

    text.highcharts-credits {
        display: none;
    }

</style>


<script src="scada/js/dashboard/highcharts.js"></script>
<script src="scada/js/dashboard/highcharts-more.js"></script>

<script src="scada/js/dashboard/solid-gauge.js"></script>
@endsection
@section('content')

 <!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> Upgrade to Pro</a>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-sm-4">
            <div class="card">
                <div class="outer">
                    <div id="container-speed" class="chart-container"></div>
                    <div id="container-rpm" class="chart-container"></div>
                </div>


            </div>
        </div>

        <!-- <div class="col-sm-4">
            <div class="card">
                <div class="card-block" style="text-align: center;">

                </div>

            </div>
        </div> -->


        <!-- Column -->
        <!-- Column -->
        
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    
    <!-- Row -->
    
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection

@section('script')
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.dev.js"></script> -->
    

    <!-- <script type="text/javascript" src="scada/js/dashboard/gauge.js"></script> -->
    <!-- <script type="text/javascript" src="scada/js/dashboard/customgauge.js"></script> -->
    <script type="text/javascript" src="scada/js/dashboard/phucGauseChart.js"></script>
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
            if (data.id == 2) {
            	//gauge1.update(data.value);
                chartSpeed.series[0].points[0].update(data.value);
            }
            if (data.id == 4) {
                //gauge1.update(data.value);
                chartRpm.series[0].points[0].update(data.value);
            }

        })
    </script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		chartSpeed.series[0].points[0].update(0);
        });
    </script>
@endsection
