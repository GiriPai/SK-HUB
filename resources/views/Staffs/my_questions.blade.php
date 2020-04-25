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
            <h1 class="page-header text-overflow">My Questions</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">App</a></li>
		<li class="active">My Questions</li>
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
		
		                <!-- Panel  Blog -->
		                <!--===================================================-->
		                <div class="panel">
		                    <!-- <div class="blog-header">
		                        <img class="img-responsive" src="img/shared-img-5.jpg" alt="Image">
		                    </div> -->
		                    <div class="blog-content">
		                        <div class="blog-title media-block">
		                            <div class="media-right textright">
		                                <a href="#" class="btn btn-icon demo-psi-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
		                                <a href="#" class="btn btn-icon demo-psi-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
		                            </div>
		                            <div class="media-body">
		                                <a href="#" class="btn-link">
		                                    <h2>Far far away, behind the word mountains</h2>
		                                </a>
		                            </div>
		                        </div>
		                        <div class="blog-body">
		                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. </p>
		                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. </p>
		                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. </p>
		                        </div>
		                    </div>
		                    <div class="blog-footer">
		                        <div class="media-left">
		                            <span class="label label-success">5 Days ago</span>
		                            <label class="label label-primary">Feature</label>
		                            <label class="label label-default">New</label>
		                            <label class="label label-default">Modern</label>
		                        </div>
		                        <div class="media-body text-right">
		                            <span class="mar-rgt"><i class="demo-pli-heart-2 icon-fw"></i>519</span>
		                            <i class="demo-pli-speech-bubble-5 icon-fw"></i>23
		                        </div>
		                    </div>
		                </div>
		                <!--===================================================-->
		
		
		
		
		
		               
		
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