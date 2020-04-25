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
            <h1 class="page-header text-overflow">My Questions</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="demo-pli-home"></i></a></li>
		<!-- <li><a href="#">App</a></li> -->
		<li class="active">My Questions</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
            <div class="fixed-fluid">
		        @include('Students.layouts.side_nav')
		        <div class="fluid">
		
		            <div class="blog blog-list-full">
						@if( count($myquestions) > 0)
						@foreach($myquestions as $myquestion)
		                <!-- Panel  Blog -->
		                <!--===================================================-->
		                <div class="panel">
		                    <!-- <div class="blog-header">
		                        <img class="img-responsive" src="img/shared-img-5.jpg" alt="Image">
		                    </div> -->
		                    <div class="blog-content">
		                        <div class="blog-title media-block">
		                            <div class="media-right textright">
		                              <!--   <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
		                            </div>
		                            <div class="media-body">
		                                <a href="{{ route('answers.show',$myquestion->id) }}" class="btn-link">
		                                    <h2>{{ $myquestion->title }}</h2>
		                                </a>
		                            </div>
		                        </div>
		                        <div class="blog-body">
		                            <p>{!! str_limit($myquestion->question) !!}</p>
		                        </div>
		                    </div>
		                    <div class="blog-footer">
		                        <div class="media-left">
		                          	<span class="label label-success">{{ $myquestion->created_at->diffForHumans() }}</span>
		                          	@if(count($myquestion->staffanswer) >0)
		                           		<label class="label label-default">Staff : {{ count($myquestion->staffanswer) }}</label>
		                           	@endif

		                            @if(count($myquestion->studentanswer) >0)
		                            	<label class="label label-default">Student : {{ count($myquestion->studentanswer) }}</label>
		                            @endif
		                           <!--  <label class="label label-default">New</label>
		                            <label class="label label-default">Modern</label> -->
		                        </div>
		                        <div class="media-body text-right">
		                            <!-- <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span> -->
		                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{count($myquestion->comment)}}
		                        </div>
		                    </div>
		                </div>
		                <!--===================================================-->
		
						@endforeach
						@else
							 <!-- Panel  Blog -->
		                <!--===================================================-->
		                <div class="panel">
		                    <!-- <div class="blog-header">
		                        <img class="img-responsive" src="img/shared-img-5.jpg" alt="Image">
		                    </div> -->
		                    <div class="blog-content">
		                        <div class="blog-title media-block">
		                            <div class="media-right textright">
		                              <!--   <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
		                            </div>
		                            <div class="media-body">
		                                <a href="#" class="btn-link">
		                                    <h2>Oops....!</h2>
		                                </a>
		                            </div>
		                        </div>
		                        <div class="blog-body">
		                            <p>You haven't asked any questions yet</p>
		                            <p> Feel free to clear your doubt </p>
		                        </div>
		                    </div>
		                    
		                </div>
		                <!--===================================================-->
						@endif
		
		
		
		               
		
		                <ul class="pager pager-rounded">
		                    <li class="previous"><a href="#fakelink">← Older</a></li>
		                    <li class="next disabled"><a href="#fakelink">Newer →</a></li>
		                </ul>
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