@extends('Students.layouts.master')
@section('content')
@include('Students.layouts.nav')
@include('Students.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

         <div class="pad-all text-center">
            <h3>Welcome back to the Dashboard.</h3>
           <!--  <h3>{{ $questions }}</h3> -->
        </div>
        @if (session('message'))
	    <div class="alert alert-success" role="alert">
	        {{ session('message') }}
	    </div>
	    @endif
    </div>
    	 <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
                <div class="fixed-fluid">
			        @include('Students.layouts.side_nav')
			        <div class="fluid">

			            <div class="blog blog-list">
							@foreach($questions as $question)
			                <!-- Panel  Blog -->
			                <!--===================================================-->
			                <div class="panel">
			                    <!-- <div class="blog-header"> -->
			                       <!--  <img class="img-responsive" src="img/shared-img-5.jpg" alt="Image"> -->
			                     <!--   <p> Posted By
			                       		<a href="">
			                       			{{ $question->user->fname }}
			                       			{{ $question->user->lname }}
			                       		</a> of {{$question->user->course->course_name}}
			                       </p> -->
			                    <!-- </div> -->
			                    <div class="blog-content">
			                        <div class="blog-title media-block">
			                            <div class="media-right textright">
			                               <!--  <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
			                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
			                            </div>
			                            <div class="media-body">
			                            	<p> Posted By
			                       		<a href="{{route('studentprofile.show',$question->user->id)}}"> 
			                       			{{ $question->user->fname }}
			                       			{{ $question->user->lname }}
			                       		</a> of {{$question->user->course->course_name}}
			                       </p>
			                                <a href="{{ route('answers.show',$question->id) }}" class="btn-link">
			                                    <h2 class="text-center">{{ $question->title }}</h2>
			                                </a>
			                            </div>
			                        </div>
			                        <div class="blog-body">
			                            <p>{!! str_limit($question->question,60) !!} </p>
			                        </div>
			                    </div>
			                    <div class="blog-footer">
			                        <div class="media-left">
			                            Posted about  <span class="label label-success">  {{ $question->created_at->diffForHumans() }}</span>

			                            @if(count($question->staffanswer) > 0)
			                            	<label class="label label-default"> Staff  : {{ $question->staffanswer->count() }}</label>
			                            @endif
			                            @if(count($question->studentanswer) > 0)
			                            	<label class="label label-default"> Student : {{ $question->studentanswer->count() }}</label>
			                            @endif
			                        </div>
			                        <div class="media-body text-right">
			                           <!--  <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>65</span> -->
			                            @if(count($question->comment) == 0)
			                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>0
			                            @else
			                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{ count($question->comment)}}
			                            @endif
			                        </div>
			                    </div>
			                </div>
			                <!--===================================================-->

							@endforeach



							<ul class="pager"> {{ $questions->links() }} </ul>
			                <!-- <ul class="pager pager-rounded">
			                    <li class="previous"><a href="#fakelink">← Older</a></li>
			                    <li class="next disabled"><a href="#fakelink">Newer →</a></li>
			                </ul> -->
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
