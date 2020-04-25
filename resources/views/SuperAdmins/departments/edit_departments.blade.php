@extends('Superadmins.layouts.master')
@section('content')
@include('Superadmins.layouts.nav')
@include('Superadmins.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Departments</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="{{route('superadmin.dashboard')}}"><i class="demo-pli-home"></i></a></li>
		<li><a href="{{route('departments.index')}}">Departments</a></li>
		<li class="active">Add New Department</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>
    
    @if (Session::has('message'))
	   <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel">
		            <div class="panel-heading">
		                <h3 class="panel-title">Add a New Department Here...</h3>
		            </div>
		
		            <!--Horizontal Form-->
		            <!--===================================================-->
		            <form class="form-horizontal" method="post" action="{{route('departments.update',$department->id)}}">
		            	@csrf
		            	@method('PUT')
		                <div class="panel-body">
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label" for="demo-hor-inputemail">Department Full Name</label>
		                        <div class="col-sm-9">
		                            <input type="text" placeholder="Department Full Name" id="demo-hor-inputemail" class="form-control" name="full_name" value="{{ $department->department_full_name }}">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label" for="demo-hor-inputpass">Department Short Name</label>
		                        <div class="col-sm-9">
		                            <input type="text" placeholder="Department Short Name" id="demo-hor-inputpass" class="form-control" name="short_name" value="{{ $department->department_name }}">
		                        </div>
		                    </div>
		                    <div class="form-group pad-ver">
			                    <label class="col-md-3 control-label">Status of the Department</label>
			                    <div class="col-md-9">
			
			                        <!-- Radio Buttons -->
			                        @if($department->status == '1')
			                        <div class="radio">
			                            <input id="demo-form-radio" class="magic-radio" type="radio" name="radio" value = "1" checked>
			                            <label for="demo-form-radio">Active</label>
			                        </div>
			                        <div class="radio">
			                            <input id="demo-form-radio-2" class="magic-radio" type="radio" name="radio" value = "0">
			                            <label for="demo-form-radio-2">In-active</label>
			                        </div>
			                        @else
			                        <div class="radio">
			                            <input id="demo-form-radio" class="magic-radio" type="radio" name="radio" value = "1" >
			                            <label for="demo-form-radio">Active</label>
			                        </div>
			                        <div class="radio">
			                            <input id="demo-form-radio-2" class="magic-radio" type="radio" name="radio" value = "0">
			                            <label for="demo-form-radio-2" checked>In-active</label>
			                        </div>
			                        @endif
			                        
			
			                    </div>
			                </div>
		                </div>
		               
		                <div class="panel-footer text-right">
		                    <button class="btn btn-success" type="submit">UPDATE</button>
		                    <button class="btn btn-info" type="submit">CANCEL</button>
		                </div>
			                
			           
		            </form>
		            <!--===================================================-->
		            <!--End Horizontal Form-->
		
		        </div>
		    </div>
		</div>

    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

@endsection	