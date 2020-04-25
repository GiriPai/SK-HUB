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
            <h1 class="page-header text-overflow">My Answers</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="demo-pli-home"></i></a></li>
		<!-- <li><a href="#">App</a></li> -->
		<li class="active">My Answers</li>
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

		            	@foreach($myanswers as $ans)
		                <!-- Panel  Blog -->
		                <!--===================================================-->
		                <div class="panel">
		                    <!-- <div class="blog-header">
		                        <img class="img-responsive" src="img/shared-img-5.jpg" alt="Image">
		                    </div> -->
		                    <div class="blog-content">
		                        <div class="blog-title media-block">
		                            <div class="media-right textright">
		                               <!--  <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
		                            </div>
		                            <div class="media-body">
		                                <a href="{{ route('answers.show',$ans->question->id) }}" class="btn-link">
		                                    <h2>{{ $ans->question->title }}</h2>
		                                </a>
		                            </div>
		                        </div>
		                        <div class="blog-body">
		                            <p><strong> Question </strong>:  {!! str_limit($ans->question->question) !!} <i>--Posted By : <strong> <a href="{{route('studentprofile.show',$ans->user->id)}}">{{ $ans->user->fname }}  {{ $ans->user->lname }}</a></strong></i> about {{ $ans->question->created_at->diffForHumans() }}</p> 
		                            <br>
		                            <p><strong> Answer </strong> : {!! str_limit($ans->student_answer) !!} </p><br>
		                        </div>
		                    </div>
		                    <div class="blog-footer">
		                        <div class="media-left">
		                            Answered about <span class="label label-success">{{ $ans->created_at->diffForHumans() }}</span>

		                             @if(count($ans->question->staffanswer) >0)
		                           		<label class="label label-default">Staff : {{ count($ans->question->staffanswer) }}</label>
		                           	@endif

		                            @if(count($ans->question->studentanswer) >0)
		                            	<label class="label label-default">Student : {{ count($ans->question->studentanswer) }}</label>
		                            @endif

		                           <!--  <label class="label label-primary">Feature</label>
		                            <label class="label label-default">New</label>
		                            <label class="label label-default">Modern</label> -->
		                        </div>
		                        <div class="media-body text-right">
		                         <!--    <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span> -->
		                         @if(count($ans->question->comment) > 0)
		                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{count($ans->question->comment)}}

		                        @else
		                            <i class="demo-pli-speech-bubble-5 icon-fw"></i> 0
		                         @endif
		                        </div>
		                    </div>
		                </div>
		                <!--===================================================-->
						@endforeach

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
