@extends('admin.layout.index')
@section('css')
<!-- Footable CSS -->
<link href="source/node_modules/footable/css/footable.core.css" rel="stylesheet">
<link href="source/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<!-- Page CSS -->
<link href="source/dist/css/pages/contact-app-page.css" rel="stylesheet">
<link href="source/dist/css/pages/footable-page.css" rel="stylesheet">
<!-- Custom CSS -->
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
            <h4 class="text-themecolor">Courses</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Courses</li>
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
    <!-- row -->
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="source/images/big/c2.jpg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Designing</h5>
                    <div class="m-b-20">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                    </div>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-30">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="source/images/big/c1.jpg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ios Development</h5>
                    <div class="m-b-20">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                    </div>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-30">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="dist/images/big/c4.jpg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Android Development</h5>
                    <div class="m-b-20">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                    </div>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-30">More Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="dist/images/big/c3.jpg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <div class="m-b-20">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                    </div>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-30">More Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <!-- row -->
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" alt="user" src="dist/images/big/c2.jpg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Designing</h5>
                    <div class="m-b-20">
                        <a class="link list-icons" href="#">
                            <i class="ti-alarm-clock"></i> 2 Year
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-heart-o"></i> 38
                        </a>
                        <a class="link list-icons m-l-10 m-r-10" href="#">
                            <i class="fa fa-usd"></i> 50
                        </a>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="ti-user"></i> Professor: Jane Doe</span>
                    </div>
                    <div class="d-flex no-block align-items-center p-t-10">
                        <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                    </div>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-30">More Details</button>
                </div>
            </div>
        </div>
        

    </div>
    <!-- row -->
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        });
</script>
<!-- Footable -->
<script src="source/node_modules/footable/js/footable.all.min.js"></script>
<script src="source/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<!--FooTable init-->
<script src="source/dist/js/pages/footable-init.js"></script>
<!-- <script src="dist/js/sidebarmenu.js"></script> -->
<!--stickey kit -->
<script src="source/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="source/node_modules/sparkline/jquery.sparkline.min.js"></script>

@endsection
