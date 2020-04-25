@extends('Admins.layouts.master')
@section('content')
@include('Admins.layouts.nav')
@include('Admins.layouts.aside')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    	 @if(session('message'))
        <div class="media-right textright">
          <p> {{ session('message') }}</p>
        </div>
         @endif
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
            <div class="panel">
		        <div class="panel-body">
		            <div class="fixed-fluid">
		                
		                <div class="fluid">
		                    <!-- COMPOSE EMAIL -->
		                    <!--===================================================-->
		
		                    <!--Input form-->
		                    <form role="form" class="form-horizontal" method="post" action="{{ route('mail.store') }}">
		                    	@csrf
		                    	<input type="hidden" name="guard" value="admin">
		                        <div class="form-group">
		                            <label class="col-lg-1 control-label text-left" for="inputEmail" > To</label>
		                            <div class="col-lg-11">
		                                <input type="email" id="inputEmail" name="tomail" class="form-control">
		                            </div>
		                        </div>
		                      <!--   <div id="demo-cc-input" class="hide form-group">
		                            <label class="col-lg-1 control-label text-left" for="inputCc">Cc</label>
		                            <div class="col-lg-11">
		                                <input type="text" id="inputCc" class="form-control">
		                            </div>
		                        </div>
		                        <div id="demo-bcc-input" class="hide form-group">
		                            <label class="col-lg-1 control-label text-left" for="inputBcc">Bcc</label>
		                            <div class="col-lg-11">
		                                <input type="text" id="inputBcc" class="form-control">
		                            </div>
		                        </div> -->
		                        <div class="form-group">
		                            <label class="col-lg-1 control-label text-left" for="inputSubject">Subject</label>
		                            <div class="col-lg-11">
		                                <input type="text" id="inputSubject" name="subjectmail" class="form-control">
		                            </div>
		                        </div>
		                   
		
		
		                    <!--Attact file button-->
		<!--                    <div class="media pad-btm">
		                        <div class="media-left">
		                            <span class="btn btn-default btn-file">
		                            Attachment <input type="file">
		                        </span>
		                        </div>
		                        <div id="demo-attach-file" class="media-body"></div>
		                    </div>-->
		
		
		                    <!--Wysiwyg editor : Summernote placeholder-->
		                    <textarea id="demo-summernote-full" name="bodymail"></textarea>
		                     
		                    <div class="pad-ver">
		
		                        <!--Send button-->
		                        <button type="submit" id="mail-send-btn" type="button" class="btn btn-primary">
		                            <i class="demo-psi-mail-send icon-lg icon-fw"></i> Send Mail
		                        </button>
		
		     
		                        <!--Discard button-->
		                      <!--  -->
		                    </div>
							</form>
		
		                    <!--===================================================-->
		                    <!-- END COMPOSE EMAIL -->
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