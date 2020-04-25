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
            <h1 class="page-header text-overflow">My Answers</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
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
		         <!-- @include('Staffs.layouts.side_nav') -->
		        <div class="fluid">

		            <div class="blog blog-list-full">
		            	@if(count($staff_answers) > 0)
							@foreach($staff_answers as $answer)
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
			                                <a href="{{ route('staffForum.show',$answer->question->id) }}" class="btn-link">
			                                    <h2>{{ $answer->question->title }}</h2>
			                                </a>
			                                <p>
			                                  <span> Posted By : </span>
			                                   <i>
			                                   		<a href="{{route('staff_view_student',$answer->question->user->id)}}">{{ $answer->question->user->fname }}  {{ $answer->question->user->lname }}
			                                   		</a>
			                                   </i> about {{ $answer->question->created_at->diffForHumans() }}
			                                </p>

			                            </div>
			                        </div>
			                        <div class="blog-body">
			                            	<p>{!! str_limit($answer->staff_ans) !!}</p>
			                        </div>
			                    </div>
			                    <div class="blog-footer">
			                        <div class="media-left">

			                            <span class="label label-success">{{ $answer->created_at->diffForHumans() }}</span>
			                            <!-- <label class="label label-primary">Feature</label> -->
			                            @if(count($answer->question->staffanswer)>0)
			                            <label class="label label-default">Staff : {{ count($answer->question->staffanswer) }} </label>
			                            @endif
			                            	&nbsp
			                            @if(count($answer->question->studentanswer)>0)
			                            <label class="label label-default">Student : {{ count($answer->question->studentanswer) }} </label>
			                            @endif
			                            <!-- <label class="label label-default">Modern</label> -->
			                        </div>
			                        <div class="media-body text-right">
			                            <!-- <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span> -->
			                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{ count($answer->question->comment) }}
			                        </div>
			                    </div>
			                </div>
			                <!--===================================================-->
							@endforeach
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
