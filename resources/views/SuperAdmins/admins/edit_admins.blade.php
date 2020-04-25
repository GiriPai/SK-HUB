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
            <h1 class="page-header text-overflow">Admin Creation</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Edit Admin Profile</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
		<div class="row">
		   
		    <div class="col-lg-12">
		        <div class="panel">
		            <div class="panel-heading">
		                <h3 class="panel-title">Profile Details</h3>
		            </div>
					@foreach($admin as $admins)
		            <form id="demo-bvd-notempty" action="{{ route('admin-management.update',$admins->id) }}" method="post" class="form-horizontal">
		            	@csrf
		            	@method('PUT')
		                <div class="panel-body">
		
		                    <!--NOT EMPTY VALIDATOR-->
		                    <!--===================================================-->
		                    <fieldset>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="fname" placeholder=" Name" value="{{ $admins->name }}" required>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Department</label>
		                            <div class="col-lg-7">
		                               <!--  <input type="text" class="form-control" name="lname" placeholder=" Department" value="{{ $admins->department->department_name }}"> -->
		                                
					                    <!-- Default choosen -->
			                            <!--===================================================-->
			                            <select data-placeholder="Choose a Department..." id="demo-chosen-select" tabindex="2" class="form-control" required>
			                            	@foreach($department as $d)
			                                	<option value="{{ $d->id }}">{{$d->department_name}}</option>
			                                @endforeach
			                            </select>
			                            <!--===================================================-->
			                            
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Email</label>
		                            <div class="col-lg-7">
		                                <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ $admins->email }}" required>
		                            </div>
		                        </div>
		                       
		                 	    <div class="form-group pad-ver">
				                    <label class="col-md-3 control-label">Status of the Admin</label>
				                    <div class="col-md-9">
									  @if($admins->status == 1)	
				                        <!-- Radio Buttons -->
				                        <div class="radio">
				                            <input id="demo-form-radio" class="magic-radio" type="radio" name="radio" value = "1" checked>
				                            <label for="demo-form-radio">Active</label>
				                        </div>
				                        <div class="radio">
				                            <input id="demo-form-radio-2" class="magic-radio" type="radio" name="radio" value = "0">
				                            <label for="demo-form-radio-2">In-active</label>
				                        </div>
				                     @else
				                        	<!-- Radio Buttons -->
				                        <div class="radio">
				                            <input id="demo-form-radio" class="magic-radio" type="radio" name="radio" value = "1" >
				                            <label for="demo-form-radio">Active</label>
				                        </div>
				                        <div class="radio">
				                            <input id="demo-form-radio-2" class="magic-radio" type="radio" name="radio" value = "0" checked>
				                            <label for="demo-form-radio-2">In-active</label>
				                        </div>
				                      @endif	
				                        
				
				                    </div>
				                </div>
			               
		                        
		                    </fieldset>
		                    <!--===================================================-->

		                </div>
		                <div class="panel-footer">
		                    <div class="row">
		                        <div class="col-sm-7 col-sm-offset-3">
		                             <button class="btn btn-mint" type="submit" name="action" value="save">Save Changes</button>
		                        	<button class="btn btn-info" type="submit" name="action" value="cancel">Cancel</button>
		                        </div>
		                       
		                    </div>
		                </div>
		            </form>
		            @endforeach
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