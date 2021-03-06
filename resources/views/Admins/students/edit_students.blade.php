@extends('Admins.layouts.master')
@section('content')
@include('Admins.layouts.nav')
@include('Admins.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">student Updation</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Edit student Profile</li>
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
		   
		    <div class="col-lg-12">
		        <div class="panel">
		            <div class="panel-heading">
		                <h3 class="panel-title">Profile Details</h3>
		            </div>
					@foreach($students as $stu)
		            <form id="demo-bvd-notempty" action="{{ route('student-management.update',$stu->id)}}" class="form-horizontal" method="post">
		            	@csrf
		            	@method('PUT')
		                <div class="panel-body">
		                    <p class="bord-btm pad-ver text-main text-bold">Required</p>
		
		                    <!--NOT EMPTY VALIDATOR-->
		                    <!--===================================================-->
		                    <fieldset>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">First Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{ $stu->fname }}" >
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Last Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{ $stu->lname }}">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Email</label>
		                            <div class="col-lg-7">
		                                <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ $stu->email }}">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Roll No</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="roll_no" placeholder="Roll. No." value="{{ $stu->roll_no }}">
		                            </div>
		                        </div>
		                       <!--  <div class="form-group">
		                            <label class="col-lg-3 control-label">Password</label>
		                            <div class="col-lg-7">
		                                <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $stu->password }}">
		                            </div>
		                        </div> -->
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Department</label>
		                            <div class="col-lg-7">
					                    <!-- Default choosen -->
			                            <!--===================================================-->
			                            <select data-placeholder="Choose a Department..." id="demo-chosen-select" tabindex="2" class="form-control" name="department" >
			                            	
			                            	<option value="{{ Auth::guard('admin')->user()->department_id }}">{{Auth::guard('admin')->user()->department->department_full_name}}</option>
			                            </select>
			                            <!--===================================================-->
			                            
		                            </div>
		                        </div>
		                         <div class="form-group">
		                            <label class="col-lg-3 control-label">Course</label>
		                            <div class="col-lg-7">
		                            	
					                    <!-- Default choosen -->
			                            <!--===================================================-->
			                            <select data-placeholder="Choose a Department..." id="course" tabindex="2" class="form-control" name="course" >
			                            	@foreach($courses as $course)
			                            		<option value="{{ $course->id }}">{{ $course->course_name }}</option>
			                            	@endforeach
			                            </select>
			                            <!--===================================================-->
			                           
			                            
		                            </div>
		                        </div>
		                        <div class="form-group pad-ver">
				                    <label class="col-md-3 control-label">Status of the student</label>
				                    <div class="col-md-9">
									  @if($stu->status == 1)	
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
		                        <!-- <div class="form-group">
		                            <label class="col-lg-3 control-label">Course</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="course" placeholder="Course">
		                            </div>
		                        </div> -->
		                    </fieldset>
		                    <!--===================================================-->
		
		                    <br>
		                <!--     <p class="bord-btm pad-ver text-main text-bold">Editables</p> -->
		
		                    <!--IDENTICAL VALIDATOR-->
		                    <!--===================================================-->
		                   <!--  <fieldset>
		                    	<div class="form-group">
		                            <label class="col-lg-3 control-label">Address</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="address" placeholder="Address">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">City</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="city" placeholder="City">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Zip</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="zip" placeholder="Zip">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">D.O.B</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="date" placeholder="Date of Birth">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Parent's Mobile Number</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="p_mobile_number" placeholder="">
		                            </div>
		                        </div> -->

		                        <!-- <div class="form-group">
		                            <label class="col-lg-3 control-label">Password</label>
		                            <div class="col-lg-7">
		                                <input type="password" class="form-control" name="password" placeholder="Password">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Retype password</label>
		                            <div class="col-lg-7">
		                                <input type="password" class="form-control" name="confirmPassword" placeholder="Retype password">
		                            </div>
		                        </div> -->
		                    <!-- </fieldset> -->
		                    <!--===================================================-->

		                </div>
		                <div class="panel-footer">
		                    <div class="row">
		                        <div class="col-sm-7 col-sm-offset-3">
		                            <button class="btn btn-mint" type="submit">Save Changes</button>
		                        	<button class="btn btn-info" type="submit">Cancel</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!--  <script type="text/javascript">
        $(document).ready(function() {
            $('#dept').on('change', function() {
                // alert("here");
                 var ID = $(this).val();
                // console.log(ID);

                if(ID == "")
                {
                  $('#course').empty();
                  $("#course").attr("disabled", true);
                }
                else{

                  $.ajax({
                           url: 'http://localhost:8000/ajax/classes_of_dept_id/'+ID,
                           type: "GET",
                           dataType: "json",
                           success:function(data) {
                               // alert(data);
                                $('select[id="course"]').empty();
                                $("#course").attr("disabled", false);
                                $("#course").append('<option>Select</option>');
                                $.each(data,function(key,value){
                                    $("#course").append('<option value="'+value['id']+'">'+value['course_name']+'</option>');
                                });
                           }
                       });
                }
             });
        });
    </script> -->

@endsection