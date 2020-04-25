<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Nifty</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        -->



        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                           <!--  <div class="pad-btm">
                                <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                            </div> -->
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::guard('superadmin')->user()->name }}</p>
                                <span class="mnp-desc">{{ Auth::guard('superadmin')->user()->email }}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                           
                            <!-- <a href="#" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a> -->
                            <a class="list-group-item" href="{{ route('superadmin.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('superadmin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                   


                    <ul id="mainnav-menu" class="list-group">
			             <!--Menu list item-->
                        <li>
                            <a href="{{ route('superadmin.dashboard') }}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>

                        </li>
                         <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-warning-window"></i>
                                <span class="menu-title">Departments</span>
                                <i class="arrow"></i>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{route('departments.index')}}">All Departments</a></li>
                                <li><a href="{{route('departments.create')}}">Create New</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="demo-pli-warning-window"></i>
                                <span class="menu-title">Courses</span>
                                <i class="arrow"></i>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{ route('courses.index') }}">All Courses</a></li>
                                <li><a href="{{ route('courses.create') }}">Create New</a></li>

                            </ul>
                        </li>

                        <!-- <li class="list-divider"></li> -->

			            <!-- <li class="list-header">Approvals</li> -->
                        <!--Menu list item-->
                       <!--  <li>
                            <a href="#">
                                <i class="demo-pli-pen-5"></i>
                                <span class="menu-title">Questions</span>
                            </a>

                        </li> -->
			             <!--Menu list item-->
			            <!-- <li>
			                <a href="#">
			                    <i class="demo-pli-pen-5"></i>
			                    <span class="menu-title">Answers</span>
			                </a>
			            </li>
 -->
			          
			           
			
			            
			            <li class="list-divider"></li>
			
			            <!--Category name-->
			            <li class="list-header">Managements</li>

                        <li>
                            <a href="#">
                                 <i class="demo-pli-male icon-lg icon-fw"></i>
                                <span class="menu-title">Admin</span>
                                <i class="arrow"></i>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{route('admin-management.index')}}">All Admins</a></li>
                                <li><a href="{{ route('admin-management.create') }}">Create New</a></li>
                            </ul>
                        </li>

			            <!--Menu list item-->
			            <li>
			                <a href="#">
			                    <i class="demo-pli-male icon-lg icon-fw"></i>
			                    <span class="menu-title">Staff</span>
								<i class="arrow"></i>
			                </a>
			
			                <!--Submenu-->
			                <ul class="collapse">
			                    <li><a href="{{route('staff-management.index')}}">All Staffs</a></li>
								<li><a href="{{ route('staff-management.create') }}">Create New</a></li>
			                </ul>
			            </li>

			            <!--Menu list item-->
			            <li>
			                <a href="#">
			                     <i class="demo-pli-male icon-lg icon-fw"></i>
			                    <span class="menu-title">Student</span>
								<i class="arrow"></i>
			                </a>
			
			                <!--Submenu-->
			                <ul class="collapse">
			                    <li><a href="{{route('student-management.index')}}">All Students</a></li>
								<li><a href="{{ route('student-management.create') }}">Create New</a></li>
			                </ul>
			            </li>


			            <li class="list-divider"></li>
			               <!--Category name-->
                        <li class="list-header">Communications</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-pli-mail"></i>
                                <span class="menu-title">Email</span>
                                <i class="arrow"></i>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{ route('superadmin.mail') }}">Compose Message</a></li>
                            </ul>
                        </li>
			            <!--Category name-->
			            <li class="list-header">More</li>
			
			            <!--Menu list item-->
			       

                        <li>
                            
                            <a href="{{ route('superadmin.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i>
                                 <span class="menu-title">Logout</span> 
                            </a>

                            <form id="logout-form" action="{{ route('superadmin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
