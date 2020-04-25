<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 09:40:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> SK - HUB : Staff </title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/css/demo/nifty-demo-icons.min.css" rel="stylesheet">

    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="/css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="/plugins/summernote/summernote.min.css" rel="stylesheet">


    <!--Dropzone [ OPTIONAL ]-->
    <link href="/plugins/dropzone/dropzone.min.css" rel="stylesheet">

    <!--FooTable [ OPTIONAL ]-->
    <link href="/plugins/fooTable/css/footable.core.css" rel="stylesheet">

    <link href="/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="/img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">SK - HUB</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->


                    </ul>
                    <ul class="nav navbar-top-links">


                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="{{ route('staffprofile.index') }}"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                    </li>
                                  <!--   <li>
                                        <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Messages</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="label label-success pull-right">New</span><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                                    </li> -->
                                    <li>
                                        <a href="{{ route('staff.logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                        <!-- <li>
                            <a href="#" class="aside-toggle">
                                <i class="demo-pli-dot-vertical"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            @yield('content')

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div> -->



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div> -->



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2018 SK - HUB</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <!-- <script src="/js/demo/nifty-demo.min.js"></script> -->


    <!--Flot Chart [ OPTIONAL ]-->



    <!--Sparkline [ OPTIONAL ]-->




    <!--Summernote [ OPTIONAL ]-->
    <script src="/plugins/summernote/summernote.min.js"></script>


    <!--Dropzone [ OPTIONAL ]-->
    <script src="/plugins/dropzone/dropzone.min.js"></script>



     <script>
        $(document).on('nifty.ready', function () {


                // DROPZONE.JS
                // =================================================================
                // Require Dropzone
                // http://www.dropzonejs.com/
                // =================================================================
                $('#demo-dropzone').dropzone({
                    //url: '/file/post',
                    //autoProcessQueue: false,
                    addRemoveLinks: true,
                    maxFiles: 1,
                    init: function() {
                        var myDropzone = this;
                        myDropzone.on('maxfilesexceeded', function(file) {
                            this.removeAllFiles();
                            this.addFile(file);
                        });
                    }
                });




                // SUMMERNOTE
                // =================================================================
                // Require Summernote
                // http://hackerwins.github.io/summernote/
                // =================================================================
                $('#demo-summernote-full').summernote({
                    height : '600px'

                });
                $('#demo-summernote, #demo-summernote-full-width').summernote({
                    height : '400px',
                });
                $('#demo-summernote-small').summernote({
                    height : '100px'
                });


        });
    </script>

    <!--FooTable [ OPTIONAL ]-->
    <script src="/plugins/fooTable/dist/footable.all.min.js"></script>

      <!--FooTable Example [ SAMPLE ]-->
    <script src="/js/demo/tables-footable.js"></script>


    <script src="/plugins/flot-charts/jquery.flot.min.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.resize.min.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Specify page [ SAMPLE ]-->
    <script src="/js/demo/dashboard.js"></script>
       <!--  <script src="/plugins/summernote/summernote.min.js"></script> -->
    <script src="/plugins/datatables/media/js/jquery.dataTables.js"></script>
    <script src="/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="/js/demo/mail.js"></script>





</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 09:41:31 GMT -->
</html>
