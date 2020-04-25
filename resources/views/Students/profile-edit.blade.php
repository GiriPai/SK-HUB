@extends('Students.layouts.master')
@section('content')
@include('Students.layouts.nav')
@include('Students.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Profiles</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="#"><i class="demo-pli-home"></i></a></li>
            <li><a href="#">Profile</a></li>
            <li class="active">Edit Profile</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    @foreach($user as $u)
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
          <div class="col-lg-12">
              <div class="panel">
                  <div class="panel-heading">
                      <h3 class="panel-title">Edit your Profile here...!</h3>
                  </div>


                  <!-- BASIC FORM ELEMENTS -->
                  <!--===================================================-->
                  <form class="panel-body form-horizontal form-padding"  method="post" action="{{route('studentprofile.update','student')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <!--Static-->
                      <div class="form-group">
                          <label class="col-md-3 control-label">First Name</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->fname}}</p></div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label">Last Name</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->lname}}</p></div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label">E-mail</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->email}}</p></div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label">Department</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->course->department->department_full_name}}</p></div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label">Course</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->course->course_name}}</p></div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label">Roll No.</label>
                          <div class="col-md-9"><p class="form-control-static">{{$u->roll_no}}</p></div>
                      </div>



                      <!--Textarea-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="demo-textarea-input">Address</label>
                          <div class="col-md-9">
                              <textarea id="demo-textarea-input" rows="4" class="form-control"  name="address"  placeholder="{{ $u->address }}"> {{ $u->address }}</textarea>
                          </div>
                      </div>
                      <!--Text Input-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="demo-text-input">City </label>
                          <div class="col-md-9">
                              <input type="text" id="demo-text-input" class="form-control" placeholder="{{$u->city}}" value="{{$u->city}}" name="city">

                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="demo-text-input">ZIP </label>
                          <div class="col-md-9">
                              <input type="text" id="demo-text-input" class="form-control" placeholder="{{$u->zip}}" value="{{$u->zip}}" name="zip">

                          </div>
                      </div>

                      <!--Email Input-->
                      <!-- <div class="form-group">
                          <label class="col-md-3 control-label" for="demo-email-input">Email Input</label>
                          <div class="col-md-9">
                              <input type="email" id="demo-email-input" class="form-control" placeholder="Enter your email">
                              <small class="help-block">Please enter your email</small>
                          </div>
                      </div> -->

                      <!--Password-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="demo-password-input">Phone Number</label>
                          <div class="col-md-9">
                              <input type="text" id="demo-password-input" class="form-control" placeholder="{{$u->phone}}" value='{{ $u->phone }}' name="phone">

                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-3 control-label">Profile Picture</label>
                          <div class="col-md-9">
                              <span class="pull-left btn btn-primary btn-file">
                              Browse... <input type="file" name="pic">
                              </span>
                          </div>
                      </div>
                      <input type="hidden" name="picval" value="{{ $u->pic }}">
                      
                      <div class="form-group">
                          <label class="col-md-3 control-label">Resume</label>
                          <div class="col-md-9">
                              <span class="pull-left btn btn-primary btn-file">
                              Browse... <input type="file" name="cv">
                              </span>
                          </div>
                      </div>
                      <input type="hidden" name="cvval" value="{{ $u->cv }}">


                          <div class="col-md-9">
                              <center>
                              <span class="pull-center btn btn-default ">
                                <input class = "btn btn-success" type="submit" name="submit" value="Save">
                              </span>
                                </center>
                          </div>


                  </form>
                  <!--===================================================-->
                  <!-- END BASIC FORM ELEMENTS -->


              </div>
          </div>

        </div>


    </div>
    <!--===================================================-->
    <!--End page content-->
    @endforeach
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->


@endsection
