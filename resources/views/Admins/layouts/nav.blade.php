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
                            <!-- <div class="pad-btm">
                                <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                            </div> -->
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{Auth::guard('admin')->user()->name}}</p>
                                <span class="mnp-desc">{{ Auth::guard('admin')->user()->department['department_name']}}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">

                            <a class="list-group-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>






                    <ul id="mainnav-menu" class="list-group">
			             <!--Menu list item-->
                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
			            <!--Category name-->
			            <li class="list-header">Approvals</li>
                        <!--Menu list item-->
                        <li>
                            <a href="{{ route('admin.questions.index')}}">
                                <i class="demo-pli-pen-5"></i>
                                <span class="menu-title">Questions</span>
                            </a>
                        </li>
			             <!--Menu list item-->
			            <li>
			                <a href="{{ route('AdminForumAnswers.index') }}">
			                    <i class="demo-pli-pen-5"></i>
			                    <span class="menu-title">Answers</span>
			                </a>
			            </li>





			            <li class="list-divider"></li>

			            <!--Category name-->
			            <li class="list-header">Managements</li>

			            <!--Menu list item-->
			            <li>
			                <a href="#">
			                    <i class="demo-pli-male icon-lg icon-fw"></i>
			                    <span class="menu-title">Staff</span>
								<i class="arrow"></i>
			                </a>

			                <!--Submenu-->
			                <ul class="collapse">
			                    <li><a href="{{ route('admin-staff-management.index') }}">All Staffs</a></li>
								<li><a href="{{ route('admin-staff-management.create') }}">Create New</a></li>
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
			                    <li><a href="{{ route('admin-student-management.index') }}">All Students</a></li>
								<li><a href="{{ route('admin-student-management.create') }}">Create New</a></li>
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
                                <li><a href="{{ route('admin.mail') }}">Compose Message</a></li>
                            </ul>
                        </li>
			         <li class="list-divider"></li>
			            <!--Category name-->
			            <li class="list-header">More</li>

			            <!--Menu list item-->
                                <li>
                                        <a href="{{ route('books.index') }}">
                                         <i class="demo-pli-paper-plane icon-2x"></i>
                                        <span class="menu-title">Books</span></a>
                                </li>



                        <li>
                            <a href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i>
                                 <span class="menu-title">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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
