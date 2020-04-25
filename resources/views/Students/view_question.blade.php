@extends('Students.layouts.master')
@section('content')
@include('Students.layouts.nav')
@include('Students.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
   <center>
		<div id="page-head" class="col-lg-6 ">

		</div>
	</center>

    @foreach($show_questions as $question)
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        	@if (session('message'))
		    <div class="alert alert-success text-center" role="alert">
		        {{ session('message') }}
		    </div>
		    @endif
		    <div class="panel blog blog-details">
		        <div class="panel-body">
		            <div class="blog-title media-block">
		                <div class="media-right textright">
		                   <!--  <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                    <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a> -->
		                </div>
		                <div class="media-body">
		                    <a href="#" class="btn-link">
		                        <h1>{{ $question->title }}</h1>
		                    </a>
		                    <p>By <a href="{{route('studentprofile.show',$question->user->id)}}" class="btn-link">{{ $question->user->fname }}  {{ $question->user->lname }}</a></p>
		                </div>
		            </div>


		                <div class="blog-body">
		                	<p> {!! $question->question !!} </p>

		                </div>

		            <div class="blog-footer">
		                <div class="media-left">
		                    <span class="label label-success">{{ $question->created_at->diffForHumans() }}</span>
		                    <!-- <small>Posted by : <a href="#" class="btn-link">Admin</a></small> -->
		                </div>
		                <div class="media-body text-right">
		                    <!-- <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span> -->
		                    <i class="demo-pli-speech-bubble-5 icon-fw"></i>{{count($question->comment)}}
		                </div>
		            </div>

		        </div>
		    </div>

		    @if(count($question->staffanswer) > 0)
		    <!--Answers from staffs-->
	        <!--===================================================-->
	        <div class="panel">

	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title"><center>Answers From Staffs ( {{ count($question->staffanswer) }} )</center></h3>
	            </div>

	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
	                	@foreach($question->staffanswer as $staffans)
		                <!--Panel with Footer-->
			            <!--===================================================-->
			            <div class="panel">
			                <!-- <div class="panel-heading"> -->
			                    <h3 class="panel-title">
			                        <a href="{{ route('student_view_staff',$staffans->staff->id) }}">{{ $staffans->staff->fname }} {{ $staffans->staff->lname }}</a>
			                    </h3>
			                <!-- </div> -->
			                <div class="panel-body">
				                <div class="nano" style="height: 30px">
				                    <div class="nano-content">
				                        <p>{!! $staffans->staff_ans !!} </p>
				                    </div>
				                </div>
				            </div>
				            <!-- <input type="hidden" name="staffanswerID" value="{{$staffans->id}}"> -->
			                <div class="panel-footer">Answered {{ $staffans->created_at->diffForHumans() }}
			               <!--  Auth::user()->staffanswervote()->where('staff_answer_id','$staffans->id')->first() -->
			               <!--  <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a> -->
			               	<a href=""  data-value="{{$staffans->id}}"  class="like btn btn-sm btn-default">

			               		{!! Auth::user()->staffanswervote()->where('staff_answer_id','=',$staffans->id)->first() ? Auth::user()->staffanswervote()->where('staff_answer_id',$staffans->id)->first()->status === '1' ? "<i class='icon-lg demo-pli-like'></i>  You Upvoted this"  : "Upvote" : "Upvote" !!}</a>

			               		<!-- <i class="icon-lg demo-pli-like"></i> Like  -->

			               	<a href="" data-value="{{$staffans->id}}" class="like btn btn-sm btn-default">

			               		{!! Auth::user()->staffanswervote()->where('staff_answer_id','=',$staffans->id)->first() ? Auth::user()->staffanswervote()->where('staff_answer_id',$staffans->id)->first()->status === '0' ? "<i class='icon-lg demo-pli-unlike'></i>  You Downvoted this"  : "Downvote" : "Downvote" !!}
			               		<!-- <i class="icon-lg demo-pli-unlike"></i> Dislike  --></a>
			               		<div class="pull-right">
					               	<i class="fa fa-thumbs-o-up"></i><span> {{ count($staffans->staffanswervote->where('status','=',1)) }}</span>
					               	<i class="fa fa-thumbs-o-down"></i><span> {{ count($staffans->staffanswervote->where('status','=',0)) }} </span>
				               </div>
			                </div>
			            </div>
			            <!--===================================================-->
			            <!--End Panel with Footer-->
			            @endforeach

	                </div>
	            </div>
	        </div>
	        <!--===================================================-->
	        <!--Answers From Staffs-->
	        @endif



	        @if(count($question->studentanswer) > 0)
	        <!--Answers from students-->
	        <!--===================================================-->
	        <div class="panel">

	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title"><center> Answers From Students ( {{count($question->studentanswer)}} )</center> </h3>

	            </div>

	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
	                	@foreach($question->studentanswer as $studentans)
		                <!--Panel with Footer-->
			            <!--===================================================-->
			            <div class="panel">
			                <!-- <div class="panel-heading"> -->
			                    <h3 class="panel-title">
			                       <a href="{{route('studentprofile.show',$studentans->user->id)}}">{{$studentans->user->fname}}   {{$studentans->user->lname}} </a>
			                    </h3>
			                <!-- </div> -->
			                <div class="panel-body">
				                <div class="nano" style="height: 30px">
				                    <div class="nano-content">
				                        <p> {!! $studentans->student_answer !!}</p>
				                    </div>
				                </div>
				            </div>
			                <div class="panel-footer"><span class="label label-success">{{ $studentans->created_at->diffForHumans() }}</span></div>
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
		                <form role="form" method="post" action="{{route('answers.store')}}">
		                	@csrf
		                	<input type="hidden" name="question_id" value="{{ $question->id }}">
			                <div class="row">
			                    <div class="col-md-12">
			                        <div class="form-group">

				                        <textarea id="demo-summernote-small"  name="studentanswer">

			                            </textarea>

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


	        <!--Post Your Comment-->
	        <!--===================================================-->
	        <div class="panel">
	            <!--Panel heading-->
	            <div class="panel-heading">
	                <div class="panel-control">
	                    <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i></button>
	                </div>
	                <h3 class="panel-title">Post your Comment</h3>
	            </div>
	            <!--Panel body-->
	            <div class="collapse">
	                <div class="panel-body">
		                <form role="form" method="post" action="{{ route('comments.store') }}">
		                	@csrf
		                	<input type="hidden" name="question_id" value=" {{ $question->id }} ">
			                <div class="row">
			                    <div class="col-md-12">
			                        <div class="form-group">
			                            <textarea class="form-control" rows="5" placeholder="Your comment" name="comment_content"></textarea>
			                        </div>
			                        <div class="form-group">
			                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-comment"></i> Submit Comment</button>
			                        </div>
			                    </div>
			                </div>
			            </form>
	                </div>
	            </div>
	        </div>
	        <!--===================================================-->
	        <!--Post Your Comment-->


	        @if(count($question->comment) > 0)
		    <div class="panel blog blog-details">
		        <div class="panel-body">
		        	<p class="text-lg text-main text-bold text-uppercase pad-btm">Comments</p>
		        	@foreach($question->comment as $c)
		        	<!-- Comments -->
		            <!--===================================================-->
		            <div class="comments media-block">
		                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{Storage::url($c->user->pic)}}"></a>
		                <div class="media-body">
		                    <div class="comment-header">
		                        <a href="{{route('studentprofile.show',$c->user->id)}}" class="media-heading box-inline text-main text-bold">{{ $c->user->fname }}  {{ $c->user->lname }}</a>
		                        <p class="text-muted text-sm">{{ $c->created_at->diffForHumans() }}</p>
		                    </div>
		                    <p>{{ $c->comment_content }}</p>
		                   <!--  <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a> -->
		                    <a class="btn btn-sm btn-default reply"><i class="icon-lg demo-pli-right-4"></i> Reply</a>
		                    @if(count($c->reply) >0)
		                    <a class="btn btn-sm btn-default loadreply"><i>Load Replies</i></a>
		                    @endif
		                    <form class="col-md-12 form-reply" style="display:none;" method="post" action="{{ route('replies.store') }}">
		                    	@csrf
		                    	<input type="hidden" name="comment_id" value="{{ $c->id }}">
		                        <div class="form-group">
		                            <textarea class="form-control" rows="3" placeholder="Your Reply" value="reply" name="reply_content"></textarea>
		                        </div>
		                        <div class="form-group" >
		                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-comment"></i> Submit Reply</button>
		                        </div>
		                    </form>
		                    <div class="loadreplies" style="display:none;">
			                    @if(count($c->reply) >0)
			                     <!-- Comments -->
			                     @foreach($c->reply as $rep)
			                    <div class="comment-body" >
			                        <div class="comment-content media">
			                            <a class="media-left" href="#"><img class="img-circle img-xs" alt="Profile Picture" src="{{ Storage::url($rep->user->pic) }}"></a>
			                            <div class="media-body">
			                                <div class="comment-header">
			                                    <a href="{{route('studentprofile.show',$rep->user->id)}}" class="text-main text-bold">{{ $rep->user->fname }} {{ $rep->user->lname }}</a>
			                                    <small class="text-muted">{{ $rep->created_at->diffForHumans() }}</small>
			                                </div>
			                                {{ $rep->reply_content }}
			                            </div>
			                        </div>
			                    </div>
			                    @endforeach

			                    @endif
			                </div>
		                </div>
		            </div>
		            <!--===================================================-->
		            <!-- End Comments -->
					@endforeach


		            <!-- Comments -->
		            <!--===================================================-->
		            <!-- <div class="comments media-block">
		                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/5.png"></a>
		                <div class="media-body">
		                    <div class="comment-header">
		                        <a href="#" class="media-heading box-inline text-main text-bold">Donald Brown</a>
		                        <p class="text-muted text-sm">Today 08:25AM - 12/009/2017</p>
		                    </div>
		                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus.</p>
		                    <a class="btn btn-sm btn-primary"><i class="icon-lg demo-pli-like"></i> 5 Liked </a>
		                    <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-right-4"></i> Reply</a>
		                </div>
		            </div> -->
		            <!--===================================================-->
		            <!-- End Comments -->

		        </div>
		    </div>
			@endif

    </div>
    <!--===================================================-->
    <!--End page content-->
    @endforeach
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
	$(".reply").click(function(){
		 $(this)
    //Find the sibling you want to toggle, of a specified class
   		 .siblings('.form-reply')
         .toggle();
		// $("#form-reply").toggle();
	});
</script>

<script>
	$(".loadreply").click(function(){
		$(this)
		.closest('div').find('.loadreplies')
		// .siblings('.loadreplies')
         .toggle();
		// $("#loadreplies").toggle();
	});
</script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var token = '{{Session::token()}}';
</script>
<script type="text/javascript">
	$('.like').on('click',function(event){
		event.preventDefault();
		var isLike = event.target.previousElementSibling == null ? true :false;
		var staffanswerID = $(this).data('value');
		console.log(staffanswerID)
		console.log(isLike);
		var up ="<i class='icon-lg demo-pli-like'></i>  You Upvoted this"

		$.ajax({
			method : "POST",
			url: "/ajax/student_on_staffans",
			data: {isLike: isLike, staffanswerID:staffanswerID,_token:token }
		})
		.done(function(data){
			event.target.innerText = isLike ? event.target.innerText == 'Upvote' ? 'You upvoted this post': 'Upvote' : event.target.innerText == 'Downvote' ? 'You Downvoted this post' :'Downvote';
			if(isLike){
				event.target.nextElementSibling.innerText = 'Downvote';
			}else{
				event.target.previousElementSibling.innerText = 'Upvote';
			}
			console.log(data);
		});
	});
</script>

@endsection
