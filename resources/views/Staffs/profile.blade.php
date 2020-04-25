@extends('Staffs.layouts.master')
@section('content')
@include('Staffs.layouts.nav')
@include('Staffs.layouts.aside')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
            <div class="panel">
		        <div class="panel-body">
		            <div class="fixed-fluid">

		                <div class="fluid">
		                    <div class="text-right">
		                       <a href="{{ route('staffprofile.edit','staff') }}"> <button class="btn btn-sm btn-primary">Edit Profile</button></a>
		                        <!-- <button class="btn btn-sm btn-primary">Send Message</button> -->
                            <!-- <a href="{{ route('student-cv') }}" class="btn btn-sm btn-success"> Download CV </a> -->
                            <a href="{{ Storage::url(Auth::guard('staff')->user()->cv )}}" class="btn btn-sm btn-success" download> Download CV </a>

		                         <!-- <button class="btn btn-sm btn-success">Download CV</button> -->
		                    </div>

		                    <hr class="new-section bord-no">

		                    <div class="pad-btm">
                          <form method="post" action="{{ route('staff-bio') }}">
                            @csrf
		                        <textarea class="form-control" rows="4" placeholder="What are you thinking?" name="bio"></textarea>
		                        <div class="mar-top clearfix">
		                            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="demo-psi-right-4 icon-fw"></i> Share</button>
		                        </div>
                          </form>
		                    </div>

		                    <hr>

                        <!--Panel with Tabs-->
      					        <!--===================================================-->
      					        <div class="panel">
      					            <!--Panel heading-->
      					            <div class="panel-heading">
      					                <div class="panel-control">
      					                    <ul class="nav nav-tabs">
      					                        <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab">Profile</a></li>
      					                        <!-- <li><a href="#demo-tabs-box-2" data-toggle="tab">Recent Questions</a></li> -->
                                         <li><a href="#demo-tabs-box-3" data-toggle="tab">Recent Answers</a></li>
      					                    </ul>
      					                </div>
      					                <h3 class="panel-title">About Me</h3>
      					            </div>

      					            <!--Panel body-->
      					            <div class="panel-body">
      					                <div class="tab-content">
                                    <!-- TAB 1 -->
      					                    <div class="tab-pane fade in active" id="demo-tabs-box-1">
      					                        <!-- <p class="text-main text-semibold"></p> -->
                                        <div class="fixed-md-200 pull-sm-left fixed-right-border">
                                          @foreach($myprofile as $me)
                                           <!-- Simple profile -->
                                           <div class="text-center">
                                               <div class="pad-ver">
                                                   <img src="{{ Storage::url($me->pic) }}" class="img-lg img-circle" alt="Profile Picture">
                                               </div>
                                               <h4 class="text-lg text-overflow mar-no">{{ $me->fname }}  {{ $me->lname }}. {{ $me->degree }}</h4>
                                                <p class="text-sm text-muted">{{$me->designation}}</p>
                                                <p class="text-sm text-muted">{{$me->roll_no}} | {{$me->email}}</p>

                                           </div>
                                           <hr>

                                           <!-- Profile Details -->
                                           <center>
                                               <p><i class="demo-pli-map-marker-2 icon-lg icon-fw"></i> {{ $me->address }}, {{ $me->city }} - {{ $me->zip }}</p>
                                               <!-- <p><a href="#" class="btn-link"><i class="demo-pli-internet icon-lg icon-fw"></i> http://www.themeon.net</a></p> -->
                                               <p><i class="demo-pli-old-telephone icon-lg icon-fw"></i>{{ $me->phone }}</p>
                                               <p class="text-sm text-center">{{ $me->bio }}</p>
                                           </center>
                                           @endforeach
                                       </div>

      					                    </div>
                                    <!-- END TAB 1 -->



                                    <!-- TAB 3 -->
                                    <div class="tab-pane fade" id="demo-tabs-box-3">
                                        <p class="text-main text-semibold">Answers</p>
                                        @foreach($myanswers as $answer)
                                        <!-- Newsfeed Content -->
                                         <!--===================================================-->
                                         <div class="comments media-block">
                                             <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ Storage::url( $answer->question->user->pic ) }}"></a>
                                             <div class="media-body">
                                                 <div class="comment-header">
                                                     <a href="#" class="media-heading box-inline text-main text-semibold">{{ $answer->staff->fname }}  {{ $answer->staff->lname }}</a> answered to {{ $answer->question->title }}.
                                                     <p class="text-muted text-sm">Asked by -  {{ $answer->question->user->fname }} {{ $answer->question->user->lname }} - about - {{  $answer->created_at->diffForHumans() }}</p>
                                                 </div>
                                                 <p> {!! str_limit($answer->staff_ans,60) !!} </p>
                                                 <div class="comment-footer">
                                                     Upvotes :  <a>{{ count($answer->staffanswervote) }}</a>
                                                  </div>

                                             </div>
                                         </div>
                                         <!--===================================================-->
                                         <!-- End Newsfeed Content -->
                                         @endforeach
                                    </div>
                                    <!-- END TAB 3 -->
      					                </div>
      					            </div>
      					        </div>
      					        <!--===================================================-->
      					        <!--End Panel with Tabs-->







		                    <!-- Newsfeed Content -->
		                    <!--===================================================-->
		                    <!-- <div class="comments media-block">
		                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/8.png"></a>
		                        <div class="media-body">
		                            <div class="comment-header">
		                                <a href="#" class="media-heading box-inline text-main text-semibold">Kathryn Obrien</a> Share a status of <a href="#" class="media-heading box-inline text-main text-semibold">Lucy Doe</a>
		                                <p class="text-muted text-sm"><i class="demo-pli-smartphone-3 icon-lg"></i> - From Mobile - 26 min ago</p>
		                            </div>
		                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
		                            <div class="text-right">
		                                <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a>
		                                <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-heart-2"></i> Love</a>
		                                <a class="btn btn-sm btn-purple"><i class="icon-lg demo-pli-speech-bubble-5"></i> Message</a>
		                            </div>
		                        </div>
		                    </div> -->
		                    <!--===================================================-->
		                    <!-- End Newsfeed Content -->



		                </div>
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
