@extends('admin.layout.index')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">User</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icon-screen-desktop"></i></h3>
                                <p class="text-muted">MYNEW CLIENTS</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-primary">23</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icon-note"></i></h3>
                                <p class="text-muted">NEW PROJECTS</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-cyan">169</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icon-doc"></i></h3>
                                <p class="text-muted">NEW INVOICES</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-purple">157</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icon-bag"></i></h3>
                                <p class="text-muted">All PROJECTS</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-success">431</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Info box -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
	    <div class="col-12">
	        <div class="card">
	            <div class="card-body">
	                <h4 class="card-title">Data Table</h4>
	                <h6 class="card-subtitle">Data table example</h6>
	                <div class="table-responsive m-t-40">
	                    <table id="myTable" class="table table-bordered table-striped">
	                        <thead>
	                            <tr>
	                                <th>Name</th>
	                                <th>Position</th>
	                                <th>Office</th>
	                                <th>Age</th>
	                                <th>Start date</th>
	                                <th>Salary</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td>Tiger Nixon</td>
	                                <td>System Architect</td>
	                                <td>Edinburgh</td>
	                                <td>61</td>
	                                <td>2011/04/25</td>
	                                <td>$320,800</td>
	                            </tr>
	                            <tr>
	                                <td>Garrett Winters</td>
	                                <td>Accountant</td>
	                                <td>Tokyo</td>
	                                <td>63</td>
	                                <td>2011/07/25</td>
	                                <td>$170,750</td>
	                            </tr>
	                            <tr>
	                                <td>Ashton Cox</td>
	                                <td>Junior Technical Author</td>
	                                <td>San Francisco</td>
	                                <td>66</td>
	                                <td>2009/01/12</td>
	                                <td>$86,000</td>
	                            </tr>
	                            
	                            <tr>
	                                <td>Fiona Green</td>
	                                <td>Chief Operating Officer (COO)</td>
	                                <td>San Francisco</td>
	                                <td>48</td>
	                                <td>2010/03/11</td>
	                                <td>$850,000</td>
	                            </tr>
	                            
	                            <tr>
	                                <td>Bruno Nash</td>
	                                <td>Software Engineer</td>
	                                <td>London</td>
	                                <td>38</td>
	                                <td>2011/05/03</td>
	                                <td>$163,500</td>
	                            </tr>
	                            <tr>
	                                <td>Sakura Yamamoto</td>
	                                <td>Support Engineer</td>
	                                <td>Tokyo</td>
	                                <td>37</td>
	                                <td>2009/08/19</td>
	                                <td>$139,575</td>
	                            </tr>
	                            
	                            
	                            <tr>
	                                <td>Jonas Alexander</td>
	                                <td>Developer</td>
	                                <td>San Francisco</td>
	                                <td>30</td>
	                                <td>2010/07/14</td>
	                                <td>$86,500</td>
	                            </tr>
	                            <tr>
	                                <td>Shad Decker</td>
	                                <td>Regional Director</td>
	                                <td>Edinburgh</td>
	                                <td>51</td>
	                                <td>2008/11/13</td>
	                                <td>$183,000</td>
	                            </tr>
	                            <tr>
	                                <td>Michael Bruce</td>
	                                <td>Javascript Developer</td>
	                                <td>Singapore</td>
	                                <td>29</td>
	                                <td>2011/06/27</td>
	                                <td>$183,000</td>
	                            </tr>
	                            <tr>
	                                <td>Donna Snider</td>
	                                <td>Customer Support</td>
	                                <td>New York</td>
	                                <td>27</td>
	                                <td>2011/01/25</td>
	                                <td>$112,000</td>
	                            </tr>
	                        </tbody>
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
@endsection
