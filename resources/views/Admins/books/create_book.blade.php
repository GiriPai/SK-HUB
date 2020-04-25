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
            <h1 class="page-header text-overflow">Upload</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Books</a></li>
		<li class="active">Upload a Book</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
	
		<div class="row">
		    <div class="col-lg-12">
		        <div class="panel">
		            <div class="panel-heading">
		                <h3 class="panel-title">Upload a Book Here...!</h3>
		            </div>
		
		
		            <!-- BASIC FORM ELEMENTS -->
		            <!--===================================================-->
		            <form class="panel-body form-horizontal form-padding" method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
					@csrf
		                <!--Static-->
		               <!--  <div class="form-group">
		                    <label class="col-md-3 control-label">Static</label>
		                    <div class="col-md-9"><p class="form-control-static">Username</p></div>
		                </div> -->
		
		                <!--Text Input-->
		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Book Name</label>
		                    <div class="col-md-9">
		                        <input type="text" id="demo-text-input" class="form-control"  name="book">
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Author</label>
		                    <div class="col-md-9">
		                        <input type="text" id="demo-text-input" class="form-control"  name="author">
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Edition</label>
		                    <div class="col-md-9">
		                        <input type="text" id="demo-text-input" class="form-control"  name="edition">
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Publication</label>
		                    <div class="col-md-9">
		                        <input type="text" id="demo-text-input" class="form-control"  name="publication">
		                    </div>
		                </div>

		                 <div class="form-group">
		                    <label class="col-md-3 control-label" for="demo-text-input">Year</label>
		                    <div class="col-md-9">
		                        <input type="year" id="demo-text-input" class="form-control"  name="year">
		                    </div>
		                </div>


		           
		                <div class="form-group">
		                    <label class="col-md-3 control-label">Upload Book</label>
		                    <div class="col-md-9">
		                        <span class="pull-left btn btn-primary btn-file">
		                        Browse... <input type="file" name="file">
		                        </span>
		                    </div>
		                </div>

		                <center><input type="submit"  class="btn btn-success" value="Upload"></center>
		            </form>
		            <!--===================================================-->
		            <!-- END BASIC FORM ELEMENTS -->
		
		
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