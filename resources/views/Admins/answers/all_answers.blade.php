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
            <h1 class="page-header text-overflow">All Answers </h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

		<div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">Answers List</h3>
		    </div>

		    <!-- Foo Table - Filtering -->
		    <!--===================================================-->
		    <div class="panel-body">
		        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
		            <thead>
		                <tr>
		                    <th data-toggle="true">Reg. No.</th>
		                    <th>Course</th>
		                    <th data-hide="phone, tablet">Answer</th>
		                    <th data-hide="phone, tablet">Post</th>
		                    <th data-hide="phone, tablet"> Action </th>
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
		                                <option value="Approved">Approved</option>
		                                <option value="Rejected">Rejected</option>
		                                <option value="Suspended">Suspended</option>
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
		            	@foreach($answers as $stu_ans)
		                <tr>
		                    <td><a href="{{route('admin_view_student',$stu_ans->user->id)}}">{{$stu_ans->user->roll_no}}</a></td>
		                    <td>{{ $stu_ans->user->course->course_name }}</td>
		                    <td>{!! str_limit($stu_ans->student_answer,30 ) !!}</td>
		                    <td>{{ $stu_ans->question->title }}</td>
		                    <td><center>
			                    <div class="btn-group">
			                        <a href="{{ route('AdminForumAnswers.show',$stu_ans->id) }}"><button class="btn btn-default"><i class="demo-pli-exclamation"></i></button></a>
			                        <!-- <button class="btn btn-default"><i class="demo-pli-recycling"></i></button> -->
			                    </div></center>
					        </td>
					        @if($stu_ans->status == 0)
		                    <td><span class="label label-table label-info">Suspended</span></td>
		                    @elseif($stu_ans->status == 1)
		                    <td><span class="label label-table label-success">Approved</span></td>
		                    @else
		                    <td><span class="label label-table label-danger">Rejected</span></td>
		                    @endif
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
