@extends('Staffs.layouts.master')
@section('content')
@include('Staffs.layouts.nav')
@include('Staffs.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    </div>
    @foreach($question as $q)
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		    <div class="panel blog blog-details">
		        <div class="panel-body">
		            <div class="blog-title media-block">
		                <div class="media-right textright">
		                   <!--  <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                    <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
		                </div>
		                <div class="media-body">
		                    <a href="#" class="btn-link">
		                        <h1>{{ $q->title }} </h1>
		                    </a>
		                    <p>By <a href="{{route('staff_view_student',$q->user->id)}}" class="btn-link">{{ $q->user->fname }} {{ $q->user->lname }}</a></p>
		                </div>
		                @if(session('message'))
		                <div class="media-right textright">
		                  <p> {{ session('message') }}</p>
		                </div>
		                 @endif
		            </div>
		            @if( $q->ques_img != "" )
		            <!-- <div class="blog-header">
		                <img class="img-responsive" src="{{ Storage::url($q->ques_img) }}" alt="Image">

		            </div> -->
		            @endif
		            <div class="blog-content">

		                <div class="blog-body">
		                    <p>{!! $q->question !!}</p>


		                </div>
		            </div>
		            <div class="blog-footer">
		                <div class="media-left">
		                    <span class="label label-success">{{ $q->created_at->diffForHumans() }}</span>
		                   <!--  <small>Posted by : <a href="#" class="btn-link">Admin</a></small> -->
		                </div>
		                <div class="media-body text-right">
		                   <!--  <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span> -->
		                   	@if(count($q->comment) > 0)
		                    <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{ count($q->comment) }}
		                    @endif
		                </div>
		            </div>

		        </div>
		    </div>
		    @if(count($q->staffanswer) != 0)
		    <!--Answers from staffs-->
	        <!--===================================================-->
	        <div class="panel">
	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title">Answers From Staffs <strong>({{ count($q->staffanswer) }}) </strong></h3>
	            </div>

	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
	                	@foreach($q->staffanswer as $staff_ans)
		                <!--Panel with Footer-->
			            <!--===================================================-->
			            <div class="panel">
			                <div class="panel-heading">
			                    <h3 class="panel-title">
			                        <a href="{{ route('staff_view_staff', $staff_ans->staff->id) }}">{{ $staff_ans->staff->fname }}  {{ $staff_ans->staff->lname }}</a>
			                    </h3>
			                </div>
			                <div class="panel-body">
				                <div class="nano" style="height: 60px">
				                    <div class="nano-content">
				                        <p> {!! $staff_ans->staff_ans !!}</p>
				                    </div>
				                </div>
				            </div>
			                <div class="panel-footer">Answered at : {{ $staff_ans->created_at->diffForHumans() }}</div>
			            </div>
			            <!--===================================================-->
			            <!--End Panel with Footer-->
			            <hr class="new-section-sm">
			            @endforeach
	                </div>
	            </div>
	        </div>
	        <!--===================================================-->
	        <!--Answers From Staffs-->
	        @endif


	        @if(count($q->studentanswer) > 0)
	        <!--Answers from students-->
	        <!--===================================================-->
	        <div class="panel">
	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title">Answers From Students ( {{count($q->studentanswer)}} )</h3>
	            </div>

	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
	                	@foreach($q->studentanswer as $student_ans)
		                <!--Panel with Footer-->
			            <!--===================================================-->
			            <div class="panel">
			                <div class="panel-heading">
			                    <h3 class="panel-title">
			                       <a href="{{route('staff_view_student',$student_ans->user->id)}}">{{ $student_ans->user->fname }}  {{ $student_ans->user->lname }}</a>
			                    </h3>
			                </div>
			                <div class="panel-body">
					                <div class="nano" style="height: 60px">
					                    <div class="nano-content">
					                        <p>  {!! $student_ans->student_answer !!}</p>
					                    </div>
					                </div>
					            </div>
			                <div class="panel-footer">Answered at : {{ $student_ans->created_at->diffForHumans() }}</div>
			            </div>
			            <!--===================================================-->
			            <!--End Panel with Footer-->
			             <hr class="new-section-sm">
			            @endforeach
	                </div>
	            </div>
	        </div>
	        <!--Answers from students-->
	        <!--===================================================-->
	        @endif

		    <!--Post Your Answer-->
	        <!--===================================================-->
	        <div class="panel">

	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title">Post your Answer</h3>
	            </div>

	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
		                <form role="form" method="post" action="{{ route('staffForum.store') }}">
		                	@csrf
		                	<input type="hidden" name="question_id" value="{{ $q->id }}">
			                <div class="row">
			                    <div class="col-md-12">
			                        <div class="form-group">
			                            <textarea id="demo-summernote-small" class="form-control" rows="4" placeholder="Your comment" name="answer"></textarea>
			                        </div>
			                        <div class="form-group">
			                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-comment"></i> Submit Answer</button>
			                        </div>
			                    </div>
			                </div>
			            </form>
	                </div>
	            </div>
	        </div>
	        <!--===================================================-->
	        <!--Post Your Answer-->



    </div>
    @endforeach
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

	$("#reply").click(function(){
		$("#form-reply").toggle();
	});
</script>

@endsection
