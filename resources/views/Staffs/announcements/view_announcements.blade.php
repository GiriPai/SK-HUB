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
            <h1 class="page-header text-overflow">Announcements</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">{{ Auth::guard('staff')->user()->department->department_name }}</a></li>
		<li class="active">ALL</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<hr class="new-section-sm bord-no">
        @foreach($announcements as $a)

		<div class="row">
		    <div class="col-lg-8 col-lg-offset-2">
		        <div class="panel panel-body text-center">


                  <p>  <h5><a href="">{{$a->staff->fname}} {{$a->staff->lname}} </a></h5> to <a>{{$a->course->course_name}}</a> about <span>{{$a->created_at->diffForHumans()}} </span></p>

		            <div class="panel-body">

                           <table>
                            <tr>
                                @if($a->img != '')
                                @foreach(unserialize($a->img) as $i)
                                    <img class="img-lg mar-btm" alt="Profile Picture" src="{{ Storage::url($i) }}">&nbsp
                                <!--   {{$i}} -->
                                @endforeach
                                @endif
                          </tr>
                        </table>
                        <p>
                           {!! $a->message !!}
		                </p>
		            </div>
		        </div>
		    </div>
		</div>
		@endforeach

    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
