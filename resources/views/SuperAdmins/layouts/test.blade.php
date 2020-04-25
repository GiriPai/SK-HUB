@extends('Admins.layouts.master')
@section('content')
@include('Admins.layouts.nav')
@include('Admins.layouts.aside')

           <!--CONTENT CONTAINER-->
           <!--===================================================-->
           <div id="content-container">
               <div id="page-head">
                  <div class="pad-all text-center">
                     <h3>Welcome back to the Dashboard.</h3>
                     <p1>Scroll down to see quick links and overviews of your Server, To do list, Order status or get some Help using Nifty.</p>
                  </div>
                </div>


               <!--Page content-->
               <!--===================================================-->
               <div id="page-content">

                 <div class="row">
                     <div class="col-lg-7">

                         <!--Network Line Chart-->
                         <!--===================================================-->
                         <div id="demo-panel-network" class="panel">
                             <div class="panel-heading">
                                 <div class="panel-control">
                                     <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
                                     <div class="dropdown">
                                         <button class="dropdown-toggle btn btn-default btn-active-primary" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical"></i></button>
                                         <ul class="dropdown-menu dropdown-menu-right">
                                             <li><a href="#">Action</a></li>
                                             <li><a href="#">Another action</a></li>
                                             <li><a href="#">Something else here</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">Separated link</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <h3 class="panel-title">Network</h3>
                             </div>


                             <!--chart placeholder-->
                             <div class="pad-all">
                                 <div id="demo-chart-network" style="height: 255px"></div>
                             </div>


                             <!--Chart information-->
                             <div class="panel-body">

                                 <div class="row">
                                     <div class="col-lg-8">
                                         <p class="text-semibold text-uppercase text-main">CPU Temperature</p>
                                         <div class="row">
                                             <div class="col-xs-5">
                                                 <div class="media">
                                                     <div class="media-left">
                                                         <span class="text-3x text-thin text-main">43.7</span>
                                                     </div>
                                                     <div class="media-body">
                                                         <p class="mar-no">°C</p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-7 text-sm">
                                                 <p>
                                                     <span>Min Values</span>
                                                     <span class="pad-lft text-semibold">
                                                     <span class="text-lg">27°</span>
                                                     <span class="labellabel-success mar-lft">
                                                         <i class="pci-caret-down text-success"></i>
                                                         <smal>- 20</smal>
                                                     </span>
                                                     </span>
                                                 </p>
                                                 <p>
                                                     <span>Max Values</span>
                                                     <span class="pad-lft text-semibold">
                                                     <span class="text-lg">69°</span>
                                                     <span class="labellabel-danger mar-lft">
                                                         <i class="pci-caret-up text-danger"></i>
                                                         <smal>+ 57</smal>
                                                     </span>
                                                     </span>
                                                 </p>
                                             </div>
                                         </div>

                                         <hr>

                                         <div class="pad-rgt">
                                             <p class="text-semibold text-uppercase text-main">Today Tips</p>
                                             <p class="text-muted mar-top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                         </div>
                                     </div>

                                     <div class="col-lg-4">
                                         <p class="text-uppercase text-semibold text-main">Bandwidth Usage</p>
                                         <ul class="list-unstyled">
                                             <li>
                                                 <div class="media pad-btm">
                                                     <div class="media-left">
                                                         <span class="text-2x text-thin text-main">754.9</span>
                                                     </div>
                                                     <div class="media-body">
                                                         <p class="mar-no">Mbps</p>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li class="pad-btm">
                                                 <div class="clearfix">
                                                     <p class="pull-left mar-no">Income</p>
                                                     <p class="pull-right mar-no">70%</p>
                                                 </div>
                                                 <div class="progress progress-sm">
                                                     <div class="progress-bar progress-bar-info" style="width: 70%;">
                                                         <span class="sr-only">70% Complete</span>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                                 <div class="clearfix">
                                                     <p class="pull-left mar-no">Outcome</p>
                                                     <p class="pull-right mar-no">10%</p>
                                                 </div>
                                                 <div class="progress progress-sm">
                                                     <div class="progress-bar progress-bar-primary" style="width: 10%;">
                                                         <span class="sr-only">10% Complete</span>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>


                         </div>
                         <!--===================================================-->
                         <!--End network line chart-->

                     </div>





               </div>
               <!--===================================================-->
               <!--End page content-->

           </div>
           <!--===================================================-->
           <!--END CONTENT CONTAINER-->
















@endsection
