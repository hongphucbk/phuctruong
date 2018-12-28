@extends('member.layout.index')
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
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Download Excel</button>
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
                    <h4 class="card-title">My Ticket</h4>
                    <h6 class="card-subtitle">List of my ticket</h6>
                    <div class="row m-t-40">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">{{count($tickets)}}</h1>
                                    <h6 class="text-white">Total Tickets</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">{{get_Member_Helpdesk_Ticket_Open(Auth::user()->id)}}</h1>
                                    <h6 class="text-white">Open</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{get_Member_Helpdesk_Ticket_Complete(Auth::user()->id)}}</h1>
                                    <h6 class="text-white">Complete</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white">{{get_Member_Helpdesk_Ticket_Pending(Auth::user()->id)}}</h1>
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
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Assign to</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $key => $val)
                                <tr>
                                    <td>{{ $val->id }}</td>
                                    <td>{{date('d-M-Y', strtotime($val->created_at))}} </td>
                                    <td>{{ $val->helpdesk_question->helpdesk_catogery->name}} </td>
                                    <td>{{ $val->helpdesk_question->brief }}</td>
                                    <td>{!! get_Status_Helpdesk($val->status) !!}</td>
                                    <td>@if($val->assign_id != Null)
                                        {{ $val->user->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($val->status == 10)
                                        <a href="member/app/helpdesk/edit/{{$val->id}}">
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="ti-marker-alt" aria-hidden="true"></i>Edit</button></a>

                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        @endif
                                        <a href="member/app/helpdesk/detail/{{$val->id}}">
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn" data-toggle="tooltip" data-original-title="Detail"><i class="ti-more-alt" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Ticket</button>
                                    </td>
                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Ticket</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="member/app/helpdesk/add">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                                <label>Subject | Tiêu đề</label>
                                                                <input type="text" name="brief" class="form-control" placeholder="Type subject"> </div>
                                                                                                                                                                                  
                                                            <div class="col-md-12 m-b-20">
                                                                <label>Category | Loại yêu cầu</label>
                                                                <select class="form-control" name="category">
                                                                    <option>__ Please select __</option>
                                                                    @foreach($category as $key => $val)

                                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="col-md-12 m-b-20">
                                                                <label>Content | Nội dung yêu cầu, phản ánh</label>
                                                                <input type="text" class="form-control" name="content" placeholder="Content"> </div>
                                                            
                                                            <button type="submit" class="btn btn-info">Add </button>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    
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
<script src="source/dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="source/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="source/node_modules/sparkline/jquery.sparkline.min.js"></script>

@endsection
