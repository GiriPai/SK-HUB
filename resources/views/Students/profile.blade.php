@extends('Students.layouts.master')
@section('content')
@include('Students.layouts.nav')
@include('Students.layouts.aside')
<div id="content-container">
    <div id="page-head">
    </div>
    <div id="page-content">
            <div class="panel">
		        <div class="panel-body">
		            <div class="fixed-fluid">
		                <div class="fluid">
		                    <div class="text-right">
		                       <a href="{{ route('studentprofile.edit','student') }}"> <button class="btn btn-sm btn-primary">Edit Profile</button></a>
                            <a href="{{Storage::url(Auth::guard()->user()->cv)}}" class="btn btn-sm btn-success" download> Download CV </a>
		                    </div>
		                    <hr class="new-section bord-no">
		                    <div class="pad-btm">
                          <form method="post" action="{{ route('student-bio') }}">
                            @csrf
		                        <textarea class="form-control" rows="4" placeholder="What are you thinking?" name="bio"></textarea>
		                        <div class="mar-top clearfix">
		                            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="demo-psi-right-4 icon-fw"></i> Share</button>
		                        </div>
                          </form>
		                    </div>
		                    <hr>
      					        <div class="panel">
      					            <div class="panel-heading">
      					                <div class="panel-control">
      					                    <ul class="nav nav-tabs">
      					                        <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab">Profile</a></li>
      					                        <li><a href="#demo-tabs-box-2" data-toggle="tab">Recent Questions</a></li>
                                         <li><a href="#demo-tabs-box-3" data-toggle="tab">Recent Answers</a></li>
      					                    </ul>
      					                </div>
      					                <h3 class="panel-title">About Me</h3>
      					            </div>
      					            <div class="panel-body">
      					                <div class="tab-content">
      					                    <div class="tab-pane fade in active" id="demo-tabs-box-1">
                                        <div class="fixed-md-200 pull-sm-left fixed-right-border">
                                          @foreach($myprofile as $me)
                                           <div class="text-center">
                                               <div class="pad-ver">
                                                   <img src="{{ Storage::url($me->pic) }}" class="img-lg img-circle" alt="Profile Picture">
                                               </div>
                                               <h4 class="text-lg text-overflow mar-no">{{ $me->fname }}  {{ $me->lname }}</h4>
                                                <p class="text-sm text-muted">{{$me->roll_no}} | {{$me->email}}</p>
                                                <p class="text-sm text-muted">{{$me->course->department->department_name}} | {{$me->course->course_name}}</p>
                                           </div>
                                           <hr>
                                           <center>
                                               <p><i class="demo-pli-map-marker-2 icon-lg icon-fw"></i> {{ $me->address }}, {{ $me->city }} - {{ $me->zip }}</p>
                                               <p><i class="demo-pli-old-telephone icon-lg icon-fw"></i>{{ $me->phone }}</p>
                                               <p class="text-sm text-center">{{ $me->bio }}</p>
                                           </center>
                                           @endforeach
                                       </div>
      					                    </div>
      					                    <div class="tab-pane fade" id="demo-tabs-box-2">
      					                        <p class="text-main text-semibold">Questions</p>
                                        @foreach($myquestions as $question)
                                         <div class="comments media-block">
                                             <div class="media-body">
                                                 <div class="comment-header">
                                                     <a href="#" class="media-heading box-inline text-main text-semibold">{{ $question->user->fname }}   {{ $question->user->lname }}</a> asked  <a href="#" class="media-heading box-inline text-main text-semibold">{{ $question->title }}</a>
                                                     <p class="text-muted text-sm"> about - {{$question->created_at->diffForHumans()}}</p>
                                                 </div>
                                                 <p>{!! str_limit($question->question,60) !!}...</p>
                                             </div>
                                         </div>
                                         @endforeach
      					                    </div>
                                    <div class="tab-pane fade" id="demo-tabs-box-3">
                                        <p class="text-main text-semibold">Answers</p>
                                        @foreach($myanswers as $answer)
                                         <div class="comments media-block">
                                             <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ Storage::url( $answer->question->user->pic ) }}"></a>
                                             <div class="media-body">
                                                 <div class="comment-header">
                                                     <a href="#" class="media-heading box-inline text-main text-semibold">{{ $answer->user->fname }}  {{ $answer->user->lname }}</a> commented to {{ $answer->question->title }}.
                                                     <p class="text-muted text-sm">Asked by -  {{ $answer->question->user->fname }} {{ $answer->question->user->lname }} - about - {{  $answer->created_at->diffForHumans() }}</p>
                                                 </div>
                                                 <p> {!! str_limit($answer->student_answer,60) !!} </p>
                                             </div>
                                         </div>
                                         @endforeach
                                    </div>
      					                </div>
      					            </div>
      					        </div>
		                </div>
		            </div>
		        </div>
		    </div>
    </div>
</div>
@endsection
