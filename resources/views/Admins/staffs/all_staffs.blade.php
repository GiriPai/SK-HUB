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
            <h1 class="page-header text-overflow">All Staffs </h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">Filtering</h3>
		    </div>

		    <!-- Foo Table - Filtering -->
		    <!--===================================================-->
		    <div class="panel-body">
		        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
		            <thead>
		                <tr>
		                    <th data-toggle="true">Staff ID</th>
		                    <th>Staff Name</th>
		                    <th data-hide="phone, tablet">Department</th>
		                    <th data-hide="phone, tablet">Course</th>
		                    <th data-hide="phone, tablet">Status</th>
		                    <th data-hide="phone, tablet">Action</th>
		                </tr>
		            </thead>
		            <div class="pad-btm form-inline">
		                <div class="row">
		                    <div class="col-sm-6 text-xs-center">
		                        <div class="form-group">
		                            <label class="control-label">Status</label>
		                            <select id="demo-foo-filter-status" class="form-control">
		                                <option value="">Show all</option>
		                                <option value="Active">Active</option>
		                                <option value="Inactive">Inactive</option>
		                                <option value="Blocked">Blocked</option>
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
		            	@foreach($staffs as $staff)
		                <tr>
		                    <td>{{ $staff->roll_no }}</td>
		                    <td><a href=" {{ route('admin_view_staff',$staff->id) }} ">{{ $staff->fname }}  {{ $staff->lname }}</a></td>
		                    <td>{{ $staff->department->department_name }}</td>

		                    @if(count($staff->department->course)>0)
		                    <td>@foreach($staff->department->course as $courses)
		                    	{{ $courses->course_name }},
		                    	 @endforeach
		                    </td>
		                    @else
		                    <td>Not Assigned</td>
		                    @endif

		                    @if($staff->status == 1)
		                    	<td><span class="label label-table label-success">Active</span></td>
		                    @elseif($staff->status ==0)
		                    	<td><span class="label label-table label-dark">Inactive</span></td>
		                    @else
		                    	<td><span class="label label-table label-danger">Blocked</span></td>
		                    @endif

		                    <td><center>
			                    <div class="btn-group">
			                        <a href="{{ route('admin-staff-management.show',$staff->id) }}"><button class="btn btn-default"><i class="demo-pli-exclamation"></i></button></a>
			                        <!-- <button class="btn btn-default"><i class="demo-pli-recycling"></i></button> -->
			                    </div></center>
					        </td>
		                </tr>
		                @endforeach

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
