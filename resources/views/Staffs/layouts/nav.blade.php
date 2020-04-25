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
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="{{ Storage::url(Auth::guard('staff')->user()->pic) }}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::guard('staff')->user()->fname }}  {{ Auth::guard('staff')->user()->lname }}</p>
                                <span class="mnp-desc">{{ Auth::guard('staff')->user()->department['department_name'] }}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <!-- <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a class="list-group-item" href="{{ route('staff.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a> -->

                            <!-- <form id="logout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> -->
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <!-- <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                    <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                    <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                    <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                    <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

			            <!--Category name-->
			            <li class="list-header">Discussions</li>
                        <!--Menu list item-->
                        <li>
                            <a href="{{ route('staff.dashboard') }}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Forum</span>
                            <!--     <i class="arrow"></i> -->
                            </a>

                        </li>
			             <!--Menu list item-->
			            <li>
			                <a href="#">
			                    <i class="demo-pli-pen-5"></i>
			                    <span class="menu-title">Announcements</span>
								<i class="arrow"></i>
			                </a>

			                <!--Submenu-->
			                <ul class="collapse">
			                    <li><a href="{{ route('announcements.create') }}">Create a New Announcement</a></li>
								<li><a href="{{ route('announcements.index') }}">All Announcements</a></li>

			                </ul>
			            </li>

			            <!--Menu list item-->
			            <!-- <li> -->
			                <!-- <a href="#">
			                    <i class="demo-pli-split-vertical-2"></i>
			                    <span class="menu-title">My Reply to Question</span>
								<i class="arrow"></i>
			                </a> -->

			                <!--Submenu-->
			               <!--  <ul class="collapse">
			                    <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
								<li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
								<li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
								<li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
								<li class="list-divider"></li>
								<li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
								<li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
								<li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
								<li class="list-divider"></li>
								<li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
								<li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

			                </ul> -->
			            <!-- </li> -->

			            <!--Menu list item-->
                        <li>
                            <a href="{{ route('staffForum.my_answers') }}">
                                <i class="demo-pli-tactic"></i>
                                <span class="menu-title">My Answers</span>
                             <!--    <i class="arrow"></i> -->
                            </a>
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
								<li><a href="{{ route('mail.create') }}">Compose Message</a></li>

			                </ul>
			            </li>

			            <!--Menu list item-->
			           <!--  <li>
			                <a href="#">
			                    <i class="demo-pli-speech-bubble-5"></i>
			                    <span class="menu-title">Chat</span>
								<i class="arrow"></i>
			                </a>

			            </li> -->



			            <li class="list-divider"></li>

			            <!--Category name-->
			            <li class="list-header">More</li>

                        <li>
                            <a href="{{ route('staff.book.index') }}">
                             <i class="demo-pli-paper-plane icon-2x"></i>
                            <span class="menu-title">Books</span></a>
                        </li>

			            <!--Menu list item-->
			            <li>

			                <a href="{{ route('staffprofile.index') }}">
                                <i class="demo-pli-male icon-lg icon-fw"></i>
                                 <span class="menu-title">View Profile</span>
                            </a>


			            </li>

                        <li>

                            <a href="{{ route('staff.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i>
                                 <span class="menu-title">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
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
