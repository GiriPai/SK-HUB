@php
    use App\Http\Controllers\SuperadminControllers\DepartmentController;
@endphp

@php
    use App\Http\Controllers\StudentControllers\AnnouncementController;
@endphp
<div class="fixed-sm-250 pull-sm-right">
	@php
      $departments = DepartmentController::get_all_departments();
    @endphp
	<p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Departments</p>
	<div class="list-group bg-trans pad-btm bord-btm">
		@foreach($departments as $department)
	    <a href="{{ route('students.show.questions', $department->id) }}" class="list-group-item list-item-sm">{{$department->department_name}}</a>
	    @endforeach
	</div>
	<hr>
	@php
      $announcements = AnnouncementController::announcements();
    @endphp
	<p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Announcements</p>
	<div class="list-group bg-trans pad-btm bord-btm">
		@foreach($announcements as $announcement)
	   		<!-- <hr> -->
	   		<b><i>{{ $announcement->staff->fname }} {{ $announcement->staff->lname }}</i></b>
	   		<br>
	    	{{ $announcement->message }}
	    	<br>
	    	<i>{{ $announcement->created_at->diffForHumans() }}</i>
	    	<hr>
	    @endforeach
	</div>

	<!-- <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Recent Post</p>
	<div class="list-group bg-trans pad-btm bord-btm">
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Lorem ipsum dolor sit amet</a><small class="box-block">6 Hours ago</small></div>
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Consectetuer adipiscing elit</a><small class="box-block">2 days ago</small></div>
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Sed diam nonummy nibh </a><small class="box-block">7 days ago</small></div>
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Laoreet dolore magna aliquam erat volutpat.</a><small class="box-block">2 weeks ago</small></div>
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Ut wisi enim ad minim veniam</a><small class="box-block">3 weeks ago</small></div>
	    <div class="list-group-item list-item-sm"><a href="#" class="btn-link">Quis nostrud exerci tation</a><small class="box-block">2 month ago</small></div>
	</div>


	<p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Recent Comments</p>
	<div class="list-group bg-trans">
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
	            <i class="badge badge-success badge-stat badge-icon pull-left"></i>
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Stephen Tran</p>
	            <small>5 minutes ago</small>
	            <p class="pad-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
	        </div>
	    </a>
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Brittany Meyer</p>
	            <small>9 minutes ago</small>
	            <p class="pad-top text-sm">I think so</p>
	        </div>
	    </a>
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
	            <i class="badge badge-info badge-stat badge-icon pull-left"></i>
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Jack George</p>
	            <small>2 hours ago</small>
	            <p class="pad-top text-sm">sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	        </div>
	    </a>
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Donald Brown</p>
	            <small>3 hours ago</small>
	            <p class="pad-top text-sm">Ut wisi enim ad minim veniam</p>
	        </div>
	    </a>
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
	            <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Betty Murphy</p>
	            <small>5 hours ago</small>
	            <p class="pad-top text-sm">quis nostrud exerci tation ullamcorper</p>
	        </div>
	    </a>
	    <a href="#" class="list-group-item">
	        <div class="media-left pos-rel">
	            <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
	            <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
	        </div>
	        <div class="media-body">
	            <p class="mar-no text-main">Samantha Reid</p>
	            <small>2 weeks ago</small>
	            <p class="pad-top text-sm">sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	        </div>
	    </a>
	</div> -->
</div>