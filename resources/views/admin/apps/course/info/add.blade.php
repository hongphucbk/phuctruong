@extends('admin.layout.index')
@section('css')
<!-- Footable CSS -->
<link href="source/node_modules/footable/css/footable.core.css" rel="stylesheet">
<link href="source/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<!-- Page CSS -->
<link href="source/dist/css/pages/contact-app-page.css" rel="stylesheet">
<link href="source/dist/css/pages/footable-page.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="source/dist/css/pages/file-upload.css" rel="stylesheet">
<link href="source/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="source/dist/css/style.min.css" rel="stylesheet">


@endsection
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Add Course</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Course</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">COURSE DETAILS</h5>
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
                    <form class="form-material m-t-40" method="post" action="admin/app/course/info/add" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                            	<div class="col-md-7" >
	                                <label for="example-text">Course Name</label>
	                                <input type="text" id="example-text" name="name" class="form-control" placeholder="Enter Course name">
	                            </div>
	                            <div class="col-md-3" >
	                                <label for="example-text">Course Start Date</label>
	                                <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter date here">
	                            </div>
	                            <div class="col-md-2" >
	                                <label for="example-text">Course Duration</label>
	                                <input type="text" id="example-text" name="duration" class="form-control" placeholder="time span of the course">
	                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            	<div class="col-md-3" >
	                                <label for="example-text">Course Price</label>
	                                <input type="text" id="example-text" name="price" class="form-control" placeholder="course fees">
	                            </div>
	                            <div class="col-md-3" >
	                                <label for="example-text">Course Promote Price</label>
	                                <input type="text" id="example-text" name="promote_price" class="form-control" placeholder="course fees">
	                            </div>
	                            <div class="col-md-3" >
	                                <label for="example-text">Course Professor</label>
	                                <input type="text" id="example-text" name="professor" class="form-control" placeholder="professor name">
	                            </div>
	                            <div class="col-md-3" >
	                                <label class="col-sm-12">Category</label>
                                    <select class="form-control" name="category_id">
                                        <option>__ Select category __</option>
                                        @foreach($categories as $key => $val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12" >
	                                <label>Course Image</label>
	                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
	                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
	                                        <input type="file" name="..."></span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            	<div class="col-md-12" >
	                            	<label>Description</label>
	                                <textarea class="form-control" rows="4" name="description"></textarea>
	                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection

@section('script')
<!-- Date Picker Plugin JavaScript -->
<script src="source/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
// Date Picker
jQuery('.mydatepicker').datepicker();
</script>

<!-- Custom Theme JavaScript -->
<!-- slimscrollbar scrollbar JavaScript -->
<script src="source/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="source/dist/js/waves.js"></script>

<script src="source/dist/js/pages/jasny-bootstrap.js"></script>
<script src="source/dist/js/pages/mask.js"></script>
<script src="source/node_modules/popper/popper.min.js"></script>
<script src="source/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Footable -->
<script src="source/node_modules/footable/js/footable.all.min.js"></script>
<script src="source/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<!--FooTable init-->
<script src="source/dist/js/pages/footable-init.js"></script>
<!-- <script src="dist/js/sidebarmenu.js"></script> -->
<!--stickey kit -->
<script src="source/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="source/node_modules/sparkline/jquery.sparkline.min.js"></script>

<!-- Lam sai hieu ung -->
<!-- <script src="source/dist/js/custom.min.js"></script> -->
@endsection
