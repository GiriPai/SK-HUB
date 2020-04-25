@extends('Superadmins.layouts.master')
@section('content')
@include('Superadmins.layouts.nav')
@include('Superadmins.layouts.aside')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
<div id="page-head">
    
<div class="pad-all text-center">
<h3>Welcome back Super Admin.</h3>

</div>
    </div>


<!--Page content-->
<!--===================================================-->
<div id="page-content">

    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <!--Questions-->
                    <div class="panel panel-success panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"> Questions</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($questions->where('status','=','0')) }}</span> Unreviewed Questions
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($questions) }}</span>All Questions
                            </p>
                        </div>
                        <div class="pad-top text-center">
                            <!--Placeholder-->
                            <div id="demo-sparkline-area" class="sparklines-full-content"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">

                    <!--Answers-->
                    <div class="panel panel-info panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold">Student Answers</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($studentanswers->where('status','0')) }}</span> Unreviewed Answers
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($studentanswers) }}</span> All Answers
                            </p>
                        </div>
                        <div class="pad-top text-center">
                            <!--Placeholder-->
                            <div id="demo-sparkline-line" class="sparklines-full-content"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">

                    <!--Sparkline Line Chart-->
                    <div class="panel panel-purple panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold">Staff Answers</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($staffanswers->groupBy('staff_id')) }}</span>Active Staff
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($staffanswers) }}</span> Total
                            </p>
                        </div>
                        <div class="pad-top text-center">
                            <!--Placeholder-->
                            <div id="demo-sparkline-line" class="sparklines-full-content"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-lg-3">

                    <div class="panel panel-warning panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold">Earning</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$764</span> Today
                            </p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">$1,332</span> Last 7 Day
                            </p>
                        </div>
                        <div class="pad-top text-center">

                            <div id="demo-sparkline-line" class="sparklines-full-content"></div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <!--Sparkline bar chart -->
                    <div class="panel panel-purple panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"></i> Staffs</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($all_staffs) }}</span> Total Staffs
                            </p>
                            <p class="mar-no">
                                <!-- <span class="pull-right text-bold">$1,332</span> Last 7 Day -->
                            </p>
                        </div>
                        <div class="text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-bar" class="box-inline"></div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">

                    <!--Sparkline bar chart -->
                    <div class="panel panel-success panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"> Students</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($all_students) }}</span> Total Students
                            </p>
                            <p class="mar-no">
                                <!-- <span class="pull-right text-bold">$1,332</span> Last 7 Day -->
                            </p>
                        </div>
                        <div class="text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-bar" class="box-inline"></div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">

                    <!--Sparkline bar chart -->
                    <div class="panel panel-info panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"></i> Courses</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($all_courses) }}</span> Total
                            </p>
                            <p class="mar-no">
                                <!-- <span class="pull-right text-bold">$1,332</span> Last 7 Day -->
                            </p>
                        </div>
                        <div class="text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-bar" class="box-inline"></div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">

                    <!--Sparkline bar chart -->
                    <div class="panel panel-info panel-colorful">
                        <div class="pad-all">
                            <p class="text-lg text-semibold"></i> Books</p>
                            <p class="mar-no">
                                <span class="pull-right text-bold">{{ count($all_books) }}</span> Total Books
                            </p>
                            <p class="mar-no">
                                <!-- <span class="pull-right text-bold">$1,332</span> Last 7 Day -->
                            </p>
                        </div>
                        <div class="text-center">

                            <!--Placeholder-->
                            <div id="demo-sparkline-bar" class="box-inline"></div>

                        </div>
                    </div>
                </div>
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