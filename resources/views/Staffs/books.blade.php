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
            <h1 class="page-header text-overflow">Books</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
		<li><a href="#"><i class="demo-pli-home"></i></a></li>
		<li><a href="#">Books</a></li>
		<li class="active">All Books</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        
		<div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">Books</h3>
		    </div>
		    <!-- Foo Table - Filtering -->
		    <!--===================================================-->
		    <div class="panel-body">
		        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
		            <thead>
		                <tr>
		                    <th data-toggle="true">Book Name</th>

		                    <th data-hide="phone, tablet">Author</th>
		                    <th data-hide="phone, tablet">Edition</th>
		                    <th data-hide="phone, tablet">Publication</th>
		                    <th> Year </th>
		                    <th data-hide="phone, tablet">Link</th>
		                    <!-- <th> Action </th> -->
		                </tr>
		            </thead>
		            <div class="pad-btm form-inline">
		                <div class="row">
		                    <div class="col-sm-6 text-xs-center">
		                        <div class="form-group">
		                            <label class="control-label">Status</label>
		                            <select id="demo-foo-filter-status" class="form-control">
		                                <option value="">Show all</option>
		                              
		                            </select>
		                            
		                        </div>
		                    </div>
		                    <!-- <div class="col-sm-6 toolbar-left">
						            
						            <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
						        
						    </div> -->
		                    <div class="col-sm-6 text-xs-center text-right">
		                        <div class="form-group">
		                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <tbody>

		            	@if(count($books) > 0 )

			            	@foreach($books as $q)

			                <tr>
			                    <td>{{ $q->book }}</td>
			                    <td>{{ $q->author }}</td>
			                    <td>{{ $q->edition }}</td>
			                    <td>{{ $q->publication }}</td>
			                    <td> {{ $q->year }}</td>
			                    <td> <center>
			                    	<a href="{{ Storage::url($q->file) }}" download>
			                    	<button class="btn btn-default">
			                    		<i class="demo-pli-download-from-cloud icon-lg">
			                    		</i>
			                    	</button> </a></center>
			                    </td>
			                    <!-- <td> Actions </td> -->
			                    
			                </tr>

			                @endforeach
			            @else
			            <tr > <td colspan="7"> <div class="text-center"> No Records Found..! </div></td> </tr>
			            @endif

		            </tbody>
		            <tfoot>
		                <tr>
		                    <td colspan="6">
		                        <div class="text-right">
		                            <ul class="pagination"></ul>
		                        </div>
		                    </td>
		                </tr>
		            </tfoot>
		        </table>
		    </div>
		    <!--===================================================-->
		    <!-- End Foo Table - Filtering -->

		</div>
		
		
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->

@endsection