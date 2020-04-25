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
            <h1 class="page-header text-overflow">Answer</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Student</a></li>
		<li class="active">Approvals</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    @foreach($answer as $ans)
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<hr class="new-section-sm bord-no">
		<div class="row">
		    <div class="col-lg-8 col-lg-offset-2">
		        <div class="panel panel-body text-center">
		            <div class="panel-heading">

		                <h3>{{ $ans->question->title }}</h3>
		                <p>Posted By <strong> <i><a href="{{route('admin_view_student',$ans->question->user->id)}}"> {{$ans->question->user->fname}}   {{$ans->question->user->lname}} </a></i></strong> of <strong> <i>{{ $ans->question->user->course->course_name }}</i></strong></p>

		            </div>
		            <div class="panel-body">
		              {!! $ans->question->question !!}
		            </div>
		        </div>
		    </div>
		</div>

		<div class="row">
		    <div class="col-lg-8 col-lg-offset-2">
		        <div class="panel panel-body text-center">
		            <div class="panel-heading">
		               <p> Answer stated by<span> <i><strong><a href="{{route('admin_view_student',$ans->user->id)}}">{{ $ans->user->fname }} {{ $ans->user->lname }} </a></strong></i></span> <i>{{ $ans->user->course->course_name }}</i></p>
		            </div>
		            <div class="panel-body">
		                <p>{!! $ans->student_answer !!}</p>
		            </div>
	                <!--===================================================-->
	                <form method="post" action="{{ route('AdminForumAnswers.update',$ans->id) }}">
	                	@csrf
	                	@method('PUT')
	                	<input type="hidden" name="question_id" value="{{ $ans->id }}">
		              	<button type="submit" class="btn btn-lg btn-default btn-hover-info" value="1" name="status">Approve</button>
			            <button type="submit" class="btn btn-lg btn-default btn-hover-danger" value="9" name="status">Reject</button>
		            </form>
	                <!--===================================================-->
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
