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

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Tickets</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Tickets</li>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Support Ticket List</h4>
                    <h6 class="card-subtitle">List of ticket opend by customers</h6>
                    <div class="row m-t-40">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">2,064</h1>
                                    <h6 class="text-white">Total Tickets</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">1,738</h1>
                                    <h6 class="text-white">Responded</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">1100</h1>
                                    <h6 class="text-white">Resolve</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white">964</h1>
                                    <h6 class="text-white">Pending</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Opened By</th>
                                    <th>Cust. Email</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Assign to</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $key => $val)
                                <tr>
                                    <td>4124</td>
                                    <td>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" class="img-circle" /> Rana Dagubati</a>
                                    </td>
                                    <td>ranabati@gmail.com</td>
                                    <td>How to set navigation</td>
                                    <td><span class="label label-success">Complete</span> </td>
                                    <td>Hritik Roshan</td>
                                    <td>12-10-2017</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                    </td>
                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <from class="form-horizontal form-material">
                                                        <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Type name"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Email"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Phone"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Designation"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Age"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control" placeholder="Salary"> </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                    <input type="file" class="upload"> </div>
                                                            </div>
                                                        </div>
                                                    </from>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <td colspan="6">
                                        <div class="text-right">
                                            <ul class="pagination"> </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
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
<script src="dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="source/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="source/node_modules/sparkline/jquery.sparkline.min.js"></script>

@endsection
