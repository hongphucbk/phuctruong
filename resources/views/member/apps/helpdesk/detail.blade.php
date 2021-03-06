@extends('member.layout.index')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">HELPDESK</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
                <a href="admin/user/add">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button></a>
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
                    <h4 class="m-b-0 text-white">Ticket</h4>
                </div>
                <div class="card-body">
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
                    <form action="admin/helpdesk/edit/{{$helpdesk_activity->id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h3 class="card-title">Ticket Subject <span style="color: blue">{{$helpdesk_activity->helpdesk_question->brief}}</span></h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input type="text" class="form-control" name="name" value="{{$helpdesk_activity->helpdesk_question->brief}}">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="control-label">Content</label>
                                        <input type="text"   class="form-control form-control-danger" name="email" value="{{$helpdesk_activity->helpdesk_question->content}}">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control form-control-danger" name="users_group_id">
                                            @foreach($category as $key => $val)
                                            @if($helpdesk_activity->helpdesk_question->helpdesk_category_id == $val->id)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Assign to</label>
                                        <select class="form-control form-control-danger" name="assign_id">
                                            @foreach($users as $key => $val)
                                            
                                            @if($helpdesk_activity->assign_id == $val->id)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                            @endif
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select class="form-control form-control-danger" name="status">
                                            @foreach($status as $key => $val)
                                            @if($helpdesk_activity->status == $val->status)
                                                <option value="{{$val->status}}">{{$val->name}}
                                            </option>
                                            @endif
                                            @endforeach
                                            
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="control-label">Solution</label>
                                        <input type="text"   class="form-control form-control-danger" name="solve" value="{{$helpdesk_activity->solve}}">
                                        <small class="form-control-feedback"> Your solve </small>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            
                        </div>
                        <!-- <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Edit</button>
                             
                        </div> -->
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
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        });
</script>
@endsection
