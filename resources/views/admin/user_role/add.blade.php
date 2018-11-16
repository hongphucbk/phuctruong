@extends('admin.layout.index')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">User Role</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">User Role</li>
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
                    <h4 class="m-b-0 text-white">USER ROLE</h4>
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
                    <form action="admin/user-role/add" method="post">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h3 class="card-title">Add new role for user</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Group</label>
                                        <select class="form-control form-control-danger" name="users_group_id">
                                            <option  value="NULL">... Chose 1 group ...</option>
                                            @foreach($user_group as $key => $val)
                                            <option value="{{$val->id}}">{{$val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span--> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Role</label>
                                        <select class="form-control form-control-danger" name="role_id">
                                            <option  value="NULL">... Chose 1 role ...</option>
                                            @foreach($roles as $key => $val)
                                            <option value="{{$val->id}}">{{$val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Note</label>
                                        <input type="text"   class="form-control form-control-danger" name="note" placeholder="Note ...">
                                        <small class="form-control-feedback"> Your note </small> </div>
                                </div>
                            </div>
                            <!--/row-->
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Add</button>
                             
                        </div>
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
