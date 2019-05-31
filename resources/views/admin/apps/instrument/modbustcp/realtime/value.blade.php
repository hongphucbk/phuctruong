@extends('admin.layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="source/tank/css.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')


<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">MODBUS TCP</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Modbus TCP</li>
                </ol>
                <a href="admin/app/modbustcp/parameter">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Home</button></a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">REAL TIME</h4>
                </div>
                <div class="card-body">
                    Giá trị 4001: <div id = 'msg'></div>
                </div>

                <div id="empty-space"></div>
                <div id="wrapper" class="wrapper">
                
            </div>
        </div>
        
        </div>

        <br>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
</div>

@endsection

@section('script')


    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.2.3/d3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
    // $(document).ready(function() {
    //         setInterval(function() {
    //             var hihi = document.getElementById('msg');
    //             var value = hihi.innerHTML;
    //                 //alert(haha);

    //                 setvaluetank(value);
    //                 setDecimalTwo();

    //                 //setvalue();
    //             }, 5 * 1000);
    //     });

    

    </script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="source/tank/js.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                    autoLoadValue();
                    UpdateTank();
                }, 5 * 1000);
        });

        function UpdateTank() {
            var hihi = document.getElementById('msg');
            var value = hihi.innerHTML;
            setvaluetank(value);
            setDecimalTwo();
        }


        function autoLoadValue() {
            // $.ajaxSetup({
            //   headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //   }
            // });

            $.ajax({
               type:'POST',
               url:'admin/app/modbustcp/realtime',
               data: { 
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                },
               success: function(data) {
                    $("#msg").html(data.msg);
                    
               }
            });
        };
    </script>
@endsection
