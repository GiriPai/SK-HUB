

@php
    use App\Http\Controllers\SuperadminControllers\DepartmentController;
@endphp
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.9/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 09:46:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register page | Nifty - Admin Template</title>



    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="plugins/chosen/chosen.min.css" rel="stylesheet">

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">


        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay"></div>


        <!-- REGISTRATION FORM -->
        <!--===================================================-->
        <div class="cls-content">
            <div class="cls-content-lg panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h3">Create a New Account</h1>
                        <p>Come join the Nifty community! Let's set up your account.</p>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                <div class="panel">
                            <div class="eq-height clearfix">
                                <div class="col-md-12 eq-box-md eq-no-panel">

                                    <!-- Main Form Wizard -->
                                    <!--===================================================-->
                                    <div id="demo-main-wz">

                                        <!--nav-->
                                        <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#demo-main-tab1">
                                                    <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
                                                    <h5 class="mar-no">Account</h5>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#demo-main-tab2">
                                                    <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
                                                    <h5 class="mar-no">Profile</h5>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#demo-main-tab3">
                                                    <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
                                                    <h5 class="mar-no">Address</h5>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#demo-main-tab4">
                                                    <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
                                                    <h5 class="mar-no">Finish</h5>
                                                </a>
                                            </li>
                                        </ul>

                                        <!--progress bar-->
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary"></div>
                                        </div>


                                        <!--form-->
                                        <form class="form-horizontal" method="post" action="{{ route('register') }}">
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    @csrf
                                                    <!--First tab-->
                                                    <div id="demo-main-tab1" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">First name</label>
                                                <div class="col-lg-9 pad-no">
                                                    <div class="clearfix">
                                                        <div class="col-lg-4">
                                                            <input type="text" placeholder="First name" name="fname" class="form-control">
                                                        </div>
                                                        <div class="col-lg-4 text-lg-right"><label class="control-label">Last name</label></div>
                                                        <div class="col-lg-4"><input type="text" placeholder="Last name" name="lname" class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>

                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Email address</label>
                                                            <div class="col-lg-9">
                                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Password</label>
                                                            <div class="col-lg-9 pad-no">
                                                                <div class="clearfix">
                                                                    <div class="col-lg-4">
                                                                        <input type="password" class="form-control mar-btm" name="password" placeholder="Password">
                                                                    </div>
                                                                    <div class="col-lg-4 text-lg-right"><label class="control-label">Retype password</label></div>
                                                                    <div class="col-lg-4"><input type="password" class="form-control" name="password2" placeholder="Retype password"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Second tab-->
                                                    <div id="demo-main-tab2" class="tab-pane fade">

                                            @php
                                              $departments = DepartmentController::get_all_departments();
                                            @endphp
                                            <div class="form-group">
                                               <label class="col-lg-2 control-label">Department</label>
                                               <div class="col-lg-9">
                                                 <!-- Default choosen -->
                                                  <!--===================================================-->
                                                  <select data-placeholder="Select your department..." id="dept" name="department_id" tabindex="2" class="form-control">
                                                    <option value=""> Select your Department... </option>
                                                    @foreach($departments as $department)
                                                     <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                    @endforeach
                                                  </select>
                                                  <!--===================================================-->
                                               </div>
                                           </div>


                                           <div class="form-group">
                                               <label class="col-lg-2 control-label">Course</label>
                                               <div class="col-lg-9 pad-no">
                                                   <div class="clearfix">
                                                       <div class="col-lg-4">
                                                         <select data-placeholder="Select your class" id="course" tabindex="2" name="course_id" class="form-control course">

                                                              <!-- Ajax option content here -->

                                                         </select>
                                                       </div>
                                                       <div class="col-lg-4 text-lg-right"><label class="control-label">Roll No.</label></div>
                                                       <div class="col-lg-4"><input type="text" placeholder="Roll No" name="roll_no" class="form-control"></div>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="form-group">
                                              <label class="col-lg-2 control-label">Father's Name</label>
                                              <div class="col-lg-9">
                                                  <input type="text" class="form-control" name="father" placeholder="Father's Name">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                             <label class="col-md-3 control-label">File input</label>
                                             <div class="col-md-9">
                                                 <span class="pull-left btn btn-primary btn-file">
                                                 Browse... <input type="file" name="pic">
                                                 </span>
                                             </div>
                                         </div>

                                                    </div>

                                                    <!--Third tab-->
                                                    <div id="demo-main-tab3" class="tab-pane">
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Phone Number</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" placeholder="Phone number" name="phone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Address</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" placeholder="Address" name="address" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">City</label>
                                                            <div class="col-lg-9 pad-no">
                                                                <div class="clearfix">
                                                                    <div class="col-lg-5">
                                                                        <input type="text" placeholder="City" name="city" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-3 text-lg-right"><label class="control-label">Zip</label></div>
                                                                    <div class="col-lg-4"><input type="text" placeholder="pincode" name="zip" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Fourth tab-->
                                                    <div id="demo-main-tab4" class="tab-pane">
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Bio</label>
                                                            <div class="col-lg-9">
                                                                <textarea placeholder="Tell us your story..." rows="4" name="bio" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-9 col-lg-offset-2">
                                                                <div class="checkbox">
                                                                    <input id="demo-checkbox-1" class="magic-checkbox" type="checkbox" name="acceptTerms">
                                                                    <label for="demo-checkbox-1"> Accept the terms and policies</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--Footer buttons-->
                                            <div class="pull-right pad-rgt mar-btm">
                                                <button type="button" class="previous btn btn-primary">Previous</button>
                                                <button type="button" class="next btn btn-primary">Next</button>
                                                <button type="submit" class="finish btn btn-success" disabled>Finish</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!--===================================================-->
                                    <!-- End of Main Form Wizard -->

                                </div>
                            </div>
                        </div>


                </div>
                <div class="pad-all">
                    Already have an account ? <a href="{{route('login')}}" class="btn-link mar-rgt text-bold">Sign In</a>
                </div>
            </div>
        </div>
        <!--===================================================-->


        <!-- DEMO PURPOSE ONLY -->
        <!--===================================================-->

        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
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
    </script>


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="js/demo/bg-images.js"></script>
    <!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="js/jquery.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="js/bootstrap.min.js"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="js/nifty.min.js"></script>






<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<script src="js/demo/nifty-demo.min.js"></script>


<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

<!--Chosen [ OPTIONAL ]-->
 <script src="plugins/chosen/chosen.jquery.min.js"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="js/demo/form-wizard.js"></script>

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 09:46:08 GMT -->
</html>
