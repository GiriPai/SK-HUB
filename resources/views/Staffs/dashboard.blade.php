@extends('Staffs.layouts.master')
@section('content')
@include('Staffs.layouts.nav')
@include('Staffs.layouts.aside')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

         <div class="pad-all text-center">
            <h3>Welcome back to the Dashboard.</h3>
            <p1></p>
            </div>
        </div>

    	 <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="fixed-fluid">
				       <!--  @include('Staffs.layouts.side_nav') -->
				        <div class="fluid">
							@if(count($questions) >0)
				            <div class="blog blog-list">
								@foreach($questions as $question)
				                <!-- Panel  Blog -->
				                <!--===================================================-->
				                <div class="panel">
				                	<!-- @if($question->ques_img != null)
				                    <div class="blog-header">
				                        <img class="img-lg" src="{{ Storage::url($question->ques_img) }}" alt="Image">
				                    </div>
				                    @endif -->
				                    <div class="blog-content">
				                        <div class="blog-title media-block">
				                            <div class="media-right text-right">
				                                <!-- <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
				                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
				                            </div>
				                            <div class="media-body">
				                                <a href="{{ route('staffForum.show',$question->id) }}" class="btn-link">
				                                    <h2>{{ $question->title }}</h2>
				                                </a>
				                                    <p>Asked By : <a href="{{route('staff_view_student',$question->user->id)}}" class="btn-link">{{ $question->user->fname }}  {{ $question->user->lname }}  {{ $question->user->roll_no }}</a>
				                                    </p>

				                            </div>
				                        </div>
				                        <div class="blog-body">
				                            <p>{!! str_limit($question->question) !!} </p>
				                        </div>
				                    </div>
				                    <div class="blog-footer">
				                        <div class="media-left">
				                            <span class="label label-success">{{ $question->created_at->diffForHumans() }}</span>
				                            @if(count($question->staffanswer) >0)
				                            <label class="label label-default">Staff  :  {{ count($question->staffanswer) }}</label>

				                            @endif

				                            @if(count($question->studentanswer) >0)
				                            <label class="label label-default">Student  :  {{ count($question->studentanswer) }}</label>


				                            @endif

				                        </div>
				                        <div class="media-body text-right">
				                            <!-- <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>65</span> -->

				                            @if(count($question->comment) >0)
				                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{ count($question->comment) }}
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

							@else
								<div class="blog-header">
				                       <p> Your don't have any questions yet </p>
				                </div>

							@endif
				        </div>
				    </div>

            </div>
            <!--===================================================-->
            <!--End page content-->


</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
