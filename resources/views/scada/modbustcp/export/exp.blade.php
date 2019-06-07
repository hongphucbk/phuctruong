@extends('scada.layout.index')
@section('css')


@endsection
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><a href="scada/modbustcp/export"> EXCEL</a></h3>
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
                    
                    <form action="admin/app/modbustcp/export" method="POST">
                        <label>Chọn ngày</label>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                        <input  type="date" id="myDate" class="form-control" name="DateFind" value="{{ date('Y-m-d',strtotime( $today )) }}" style="display: inline;width: 20%">
                        <label>đến ngày</label>
                        <input  type="date" class="form-control" name="DateFind2" value="{{ date('Y-m-d',strtotime( $today )) }}" style="display: inline;width: 20%">
                        <hr>
                        <button type="submit" class="btn btn-default">Tải xuống</button>
                        <!-- @if(isset($ngay))
                        <h4>Ngày <span style="color: blue">{{date('d-m-Y',strtotime($ngay))}}</span> đến <span style="color: blue">{{date('d-m-Y',strtotime($ngay2))}}</span> </h4>
                        @endif -->

                    </form>
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
     

@endsection
