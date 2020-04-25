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
            <h1 class="page-header text-overflow">Question</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Question</a></li>
		<li class="active">Approvals</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
		<hr class="new-section-sm bord-no">
		<div class="row">
		    <div class="col-lg-8 col-lg-offset-2">
		        <div class="panel panel-body text-center">
		            <div class="panel-heading">
		                <h3>{{$question->title}}</h3>
		            </div>
		             <div class="panel-body">
		                    <textarea id="demo-summernote" name="content">
		                    	{{ $question->question }}

		                    </textarea>
		                </div>
		        </div>
		    </div>
		</div>
		
		<div class="row">
		    <div class="col-lg-8 col-lg-offset-2">
		        <div class="panel panel-body text-center">
		            
		            <div class="panel-body">
		            	<form method="post" action="{{route('admin.update.question',$question->id)}}">
		            		@csrf
		            		@method('put')
			                
			                <button type="submit" class="btn btn-lg btn-default btn-hover-info" value="1" name="status">Approve</button>
			                <button type="submit" class="btn btn-lg btn-default btn-hover-danger" value="9" name="status">Reject</button>
			               
			            </form>
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