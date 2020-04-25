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
            <h1 class="page-header text-overflow">All students </h1>
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
		                    <th data-toggle="true">student ID</th>
		                    <th>student Name</th>
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
		            	@foreach($students as $student)
		                <tr>
		                    <td>{{ $student->roll_no }}</td>
		                    <td><a href="{{route('superadmin_view_student',$student->id)}}">{{ $student->fname }}  {{ $student->lname }}</a></td>
		                    <td>{{ $student->course->department->department_name }}</td>

		                    <td>
		                    	{{ $student->course->course_name }}

		                    </td>

		                    @if($student->status == 1)
		                    	<td><span class="label label-table label-success">Active</span></td>
		                    @elseif($student->status ==0)
		                    	<td><span class="label label-table label-dark">Inactive</span></td>
		                    @else
		                    	<td><span class="label label-table label-danger">Blocked</span></td>
		                    @endif

		                    <td><center>
			                    <div class="btn-group">
			                        <a href="{{ route('student-management.show',$student->id) }}"><button class="btn btn-default"><i class="demo-pli-exclamation"></i></button></a>
			                        <!-- <button class="btn btn-default"><i class="demo-pli-recycling"></i></button> -->
			                    </div></center>
					        </td>
		                </tr>
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
