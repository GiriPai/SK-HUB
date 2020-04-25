@extends('Staffs.layouts.master')
@section('content')
@include('Staffs.layouts.nav')
@include('Staffs.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Staff Profile</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Edit Profile</li>
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
		
		            <form id="demo-bvd-notempty" action="" class="form-horizontal">
		                <div class="panel-body">
		                    <p class="bord-btm pad-ver text-main text-bold">Required</p>
		
		                    <!--NOT EMPTY VALIDATOR-->
		                    <!--===================================================-->
		                    <fieldset>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">First Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="fname" placeholder="First Name" disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Last Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="lname" placeholder="Last Name" disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Email</label>
		                            <div class="col-lg-7">
		                                <input type="email" class="form-control" name="email" placeholder="E-mail" disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Roll No</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="roll_no" placeholder="Roll. No." disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Father's Name</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="father" placeholder="Father's Name" disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Department</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="department" placeholder="Department" disabled>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-3 control-label">Course</label>
		                            <div class="col-lg-7">
		                                <input type="text" class="form-control" name="course" placeholder="Course" disabled>
		                            </div>
		                        </div>
		                    </fieldset>
		                    <!--===================================================-->
		
		                    <br>
		                    <p class="bord-btm pad-ver text-main text-bold">Editables</p>
		
		                    <!--IDENTICAL VALIDATOR-->
		                    <!--===================================================-->
		                    <fieldset>
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
		                        </div>

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
		                    </fieldset>
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