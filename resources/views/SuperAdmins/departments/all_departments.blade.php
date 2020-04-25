@extends('Superadmins.layouts.master')
@section('content')
@include('Superadmins.layouts.nav')
@include('Superadmins.layouts.aside')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
	    
	    <!--Page Title-->
	    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	    <div id="page-title">
	        <h1 class="page-header text-overflow">Departments</h1>
	    </div>
	    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	    <!--End page title-->


	    <!--Breadcrumb-->
	    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	    <ol class="breadcrumb">
		<li><a href="{{route('superadmin.dashboard')}}"><i class="demo-pli-home"></i></a></li>
		<li class="active">All Departments</li>
	    </ol>
	    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	    <!--End breadcrumb-->

	</div>


 <!--Page content-->
	<!--===================================================-->
	<div id="page-content">
	    
		    <!-- Contact Toolbar -->
		    <!---------------------------------->
		    <div class="row pad-btm">
		        <div class="col-sm-6 toolbar-left">
		           <a href="{{route('departments.create')}}"> <button id="demo-btn-addrow" class="btn btn-purple">Add New</button></a>
		            <!-- <button class="btn btn-default"><i class="demo-pli-printer"></i></button> -->
		        </div>
		       <!--  <div class="col-sm-6 toolbar-right text-right">
		            Sort by :
		            <div class="select">
		                <select id="demo-ease">
		                    <option value="date-created" selected="">Date Created</option>
		                    <option value="date-modified">Date Modified</option>
		                    <option value="frequency-used">Frequency Used</option>
		                    <option value="alpabetically">Alpabetically</option>
		                    <option value="alpabetically-reversed">Alpabetically Reversed</option>
		                </select>
		            </div>
		            <button class="btn btn-default">Filter</button>
		            <button class="btn btn-primary"><i class="demo-psi-gear icon-lg"></i></button>
		        </div> -->
		    </div>
		    <!---------------------------------->
		
		
		    <div class="row">
		    	@foreach($dep_list as $list)
		    	<!-- {{ $list }} -->
		        <div class="col-sm-4 col-md-3">
		
					
		            <!-- Contact Widget -->
		            <!---------------------------------->
		            <div class="panel pos-rel">
		                <div class="widget-control text-right">
		                	@if($list->status == 1)
		                    <a href="#" class="add-tooltip btn btn-trans" data-original-title="Active"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
		                    @else
		                    <a href="#" class="add-tooltip btn btn-trans" data-original-title="Inactive"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
		                    @endif
		                    <!-- <div class="btn-group dropdown">
		                        <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
		                        <ul class="dropdown-menu dropdown-menu-right" style="">
		                            <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
		                            <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
		                            <li class="divider"></li>
		                            <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
		                            <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
		                            <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
		                        </ul>
		                    </div> -->
		                </div>
		                <div class="pad-all">
		                    <div class="media pad-ver">
		                        <!-- <div class="media-left">
		                            <a href="#" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" src="/img/profile-photos/8.png"></a>
		                        </div> -->
		                        <div class="media-body pad-top">
		                            <a href="#" class="box-inline">
		                                <span class="text-lg text-semibold text-main">{{ $list->department_name }}</span>
		                                <p class="text-sm">{{$list->department_full_name}}</p>
		                            </a>
		                        </div>
		                    </div>
		                    <!-- <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p> -->
		                    <div class="text-center pad-to">
		                        <div class="btn-group">
		                          <!--   <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-consulting icon-lg icon-fw"></i> Call</a>
		                            <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-mail icon-lg icon-fw"></i> Email</a> -->
		                            <a href="{{route('departments.edit',$list->id)}}" class="btn btn-sm btn-default"><i class="demo-pli-pen-5 icon-lg icon-fw"></i> Edit</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!---------------------------------->
					
		
		        </div>
		        @endforeach
		    </div>
		    
		
		    
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->


@endsection	