@extends('admin.layout.index')
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
                    <li class="breadcrumb-item active">Export</li>
                </ol>
                <a href="admin/app/modbustcp/value">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Back to List</button></a>
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
	    <div class="col-12">
	        <div class="card">
	            <div class="card-body">
	                <h4 class="card-title">EXPORT</h4>
	                <div class="table-responsive m-t-40">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('notification'))
                            <div class="alert alert-success">
                                {{session('notification')}}                         
                            </div>
                        @endif
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
	</div>
	<!-- ============================================================== -->
	<!-- End PAge Content -->
	<!-- ============================================================== -->
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        });
</script>
@endsection
