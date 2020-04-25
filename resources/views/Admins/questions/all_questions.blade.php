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
            <h1 class="page-header text-overflow">All Questions </h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">All Questions</h3>
		    </div>

		    <!-- Foo Table - Filtering -->
		    <!--===================================================-->
		    <div class="panel-body">
		        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
		            <thead>
		                <tr>
		                    <th data-toggle="true">Question Title</th>

		                    <th data-hide="phone, tablet">Posted By</th>
		                    <th data-hide="phone, tablet">Roll. No.</th>
		                    <th data-hide="phone, tablet">Class</th>
		                    <th> Actions </th>
		                    <th data-hide="phone, tablet">Status</th>
		                </tr>
		            </thead>
		            <div class="pad-btm form-inline">
		                <div class="row">
		                    <div class="col-sm-6 text-xs-center">
		                        <div class="form-group">
		                            <label class="control-label">Status</label>
		                            <select id="demo-foo-filter-status" class="form-control">
		                                <option value="">Show all</option>
		                                <option value="Yet to approve">Yet to approve</option>
		                                <option value="Approved">Approved</option>
		                                <option value="Rejected">Rejected</option>
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

		            	@if(count($all_questions) > 0 )

			            	@foreach($all_questions as $q)

			                <tr>
			                    <td>{{ $q->title }}</td>
			                    <td><a href="{{route('admin_view_student',$q->user->id)}}">{{ $q->user->fname }} {{ $q->user->lname }}</a></td>
			                    <td>{{ $q->user->roll_no }}</td>
			                    <td>{{ $q->user->course->course_name }}
			                    <td><center>
			                    	<div class="btn-group">
				                        <a href="{{route('admin.edit.question', $q->id)}}">
				                        	<button class="btn btn-default"><i class="demo-pli-exclamation"></i></button>
				                        </a>
				                        <!-- <button class="btn btn-default"><i class="demo-pli-recycling"></i></button> -->
					                 </div>
					             </center>
					            </td>
			                    @if($q->status == 0)
			                    <td><span class="label label-table label-success">Yet to approve</span></td>
			                    @elseif($q->status == 1)
			                    <td><span class="label label-table label-dark">Approved</span></td>
			                    @else
			                    <td><span class="label label-table label-danger">Rejected</span></td>
			                    @endif
			                </tr>

			                @endforeach
			            @else
			            <tr > <td colspan="6"> <div class="text-center"> No Records Found..! </div></td> </tr>
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
