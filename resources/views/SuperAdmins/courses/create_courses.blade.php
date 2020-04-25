@extends('Superadmins.layouts.master')
@section('content')
@include('Superadmins.layouts.nav')
@include('Superadmins.layouts.aside')
@php
    use App\Http\Controllers\SuperadminControllers\DepartmentController;
@endphp

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Courses</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="{{route('superadmin.dashboard')}}"><i class="demo-pli-home"></i></a></li>
		<li><a href="{{route('courses.index')}}">Courses</a></li>
		<li class="active">Add New Course</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>
    
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
    @endif

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel">
		            <div class="panel-heading">
		                <h3 class="panel-title">Add a New Course Here...</h3>
		            </div>
					@php
                      $departments = DepartmentController::get_all_departments();
                    @endphp
		            <!--Horizontal Form-->
		            <!--===================================================-->
		            <form class="form-horizontal" method="post" action="{{route('courses.store')}}">
		            	@csrf
		                <div class="panel-body">
		                    <div class="form-group">
	                           <label class="col-lg-2 control-label">Department</label>
	                           <div class="col-lg-9">
	                             <!-- Default choosen -->
	                              <!--===================================================-->
	                              <select data-placeholder="Select your department..." id="dept"  name="department_id" tabindex="2" class="form-control">
	                                <option value=""> Select your Department... </option>
	                                @foreach($departments as $department)
	                                 <option value="{{ $department->id }}">{{ $department->department_name }}</option>
	                                @endforeach
	                              </select>
	                              <!--===================================================-->
	                           </div>
	                       </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 control-label">Course Name</label>
		                        <div class="col-sm-9">
		                            <input type="text" placeholder="Course Name" id="demo-hor-inputpass" class="form-control" name="course_name">
		                        </div>
		                    </div>
		                    <div class="form-group">
	                           <label class="col-lg-2 control-label">Tutor</label>
	                           <div class="col-lg-9">
	                             <!-- Default choosen -->
	                              <!--===================================================-->
	                              <select data-placeholder="Select your department..." id="course" name="staff_id" tabindex="2" class="form-control">
	                                <option value=""> Select Tutor... </option>
	                                
	                              </select>
	                              <!--===================================================-->
	                           </div>
	                       </div>
		                    <div class="form-group pad-ver">
			                    <label class="col-md-3 control-label">Status of the Course</label>
			                    <div class="col-md-9">
			
			                        <!-- Radio Buttons -->
			                        <div class="radio">
			                            <input id="demo-form-radio" class="magic-radio" type="radio" name="radio" value = "1" checked>
			                            <label for="demo-form-radio">Active</label>
			                        </div>
			                        <div class="radio">
			                            <input id="demo-form-radio-2" class="magic-radio" type="radio" name="radio" value = "0">
			                            <label for="demo-form-radio-2">In-active</label>
			                        </div>
			                        
			
			                    </div>
			                </div>
		                </div>
		               
		                <div class="panel-footer text-right">
		                    <button class="btn btn-success" type="submit">SAVE</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dept').on('change', function() {
                // alert("here");
                 var ID = $(this).val();
                console.log(ID);

                if(ID == "")
                {
                  $('#staff_id').empty();
                  $("#staff_id").attr("disabled", true);
                }
                else{

                  $.ajax({
                           url: 'http://localhost:8000/ajax/staffs_of_dept_id/'+ID,
                           type: "GET",
                           dataType: "json",
                           success:function(data) {
                           	// console.log(data);
                               // alert(data);
                                $('select[id="course"]').empty();
                                $("#course").attr("disabled", false);
                                $("#course").append('<option>Select</option>');
                                $.each(data,function(key,value){
                                    $("#course").append('<option value="'+value['id']+'">'+value['fname']+ ' ' +value['lname']+'</option>');
                                });
                           }
                       });
                }
             });
        });
    </script>

@endsection	