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
            <h1 class="page-header text-overflow">Courses</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->                
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">Course List</h3>
		    </div>
		
		    <!-- Foo Table - Filtering -->
		    <!--===================================================-->
		    <div class="panel-body">
		        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
		            <thead>
		                <tr>
		                    <th data-toggle="true">Course</th>
		                    <th data-hide="phone, tablet">Department</th>
		                    <th data-hide="phone, tablet">Tutor</th>
		                    <th data-hide="phone, tablet">Status</th>
		                    <th data-hide="phone, tablet">Actions</th>
		                </tr>
		            </thead>
		            <div class="pad-btm form-inline">
		                <div class="row">
		                    <div class="col-sm-6 text-xs-center">
		                        <div class="form-group">
		                            <label class="control-label">Status</label>
		                            <select id="demo-foo-filter-status" class="form-control">
		                                <option value="">Show all</option>
		                                <option value="active">Active</option>
		                                <option value="disabled">Disabled</option>
		                                <option value="suspended">Suspended</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="col-sm-6 text-xs-center text-right">
		                        <div class="form-group">
		                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <tbody>

		            	@foreach($courses as $c)

		            	<form method="get" action="{{route('courses.edit',$c->id)}}">
		            		
		            		
			                <tr>
			                	<input type="hidden" value="{{$c->id}}">
			                    <td>{{ $c->course_name }}</td>
			                    <td>{{ $c->department->department_name }}</td>
			                	@if( $c->staff)
			                    	<td>{{ $c->staff->fname }}  {{ $c->staff->lname }}</td>
			                    @else
			                    	<td> Not Assigned </td>
			                	@endif
			                    <!-- <td>22 Jun 1972</td> -->
			                    @if($c->status==1)
			                    <td><span class="label label-table label-success">Active</span></td>
			                    @else
			                    <td><span class="label label-table label-info">in-active</span></td>
			                    @endif

			                    <td>
			                   		<div class="demo-nifty-btn">
						
				                        <!--Icon Buttons-->
				                        <!--===================================================-->
				                       	<button class="btn btn-success btn-icon btn-xs"><i class="demo-psi-pen-5 icon-sm" type="submit"></i></button>
				                        <button class="btn btn-mint btn-icon btn-xs"><i class="demo-psi-recycling icon-sm"></i></button>
				                        
				                        <!--===================================================-->
				                	</div>
				                </td>
			                </tr>
		            	</form>
		                @endforeach
		            
		          
		            </tbody>
		            <tfoot>
		                <tr>
		                    <td colspan="5">
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