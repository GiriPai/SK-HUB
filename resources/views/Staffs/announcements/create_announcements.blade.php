@extends('Staffs.layouts.master')
@section('content')
@include('Staffs.layouts.nav')
@include('Staffs.layouts.aside')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
    </div>

    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <form method="post" action="{{route('announcements.store')}}" enctype="multipart/form-data"> 
        	@csrf
		     <!-- Contact Toolbar -->
		     <!---------------------------------->
		     <div class="row pad-btm">
		         <div class="col-sm-6 col-sm-offset-6 toolbar-right text-right">
		            <!--  <button class="btn btn-default">Preview</button>
		             <button class="btn btn-default">Draft</button> -->
		             <button class="btn btn-primary" type="submit">Save &amp; Publish</button>
		         </div>
		     </div>
		     <!---------------------------------->
		
		    <div class="fixed-fluid">
		        <div class="fixed-sm-300 pull-sm-right">
		            <div class="panel">
		                <div class="panel-body">

		                	<p class="text-main text-bold text-uppercase">Publish</p>
		                    <div class="form-horizontal">
		                       <!--  <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Status</label>
		                            <div class="col-sm-7">
		                                <div class="select">
		                                    <select>
		                                        <option value="push">Published</option>
		                                        <option value="push">Unpublish</option>
		                                    </select>
		                                </div>
		                            </div>
		                        </div> -->
		                        <!-- <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Visibility</label>
		                            <div class="col-sm-7">
		                                <div class="select">
		                                    <select>
		                                        <option value="none" selected="" disabled="disabled">Public</option>
		                                        <option value="push">Private</option>
		                                    </select>
		                                </div>
		                            </div>
		                        </div> -->
		                        <!-- <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Department</label>
		                            <div class="col-sm-7">
		                                <div class="select">
		                                    <select>
		                                        <option value="none" selected="" disabled="disabled">Please Select...</option>
		                                        <option value="push">Internet</option>
		                                        <option value="push">Movies</option>
		                                        <option value="push">Musics</option>
		                                        <option value="push">Entertainment</option>
		                                        <option value="push">Sports</option>
		                                    </select>
		                                </div>
		                            </div>
		                        </div> -->
		                        <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Courses</label>
		                            <div class="col-sm-7">
		                                <div class="select">
		                                    <select name="course_id">
		                                        <option value="0" selected="" disabled="disabled">Please Select...</option>
		                                        @foreach($courses as $course)
		                                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
		                                        @endforeach
		                                       
		                                    </select>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <hr>
		
		                    <p class="text-main text-bold text-uppercase">Featured Image</p>
		                    <!-- <p>Featured images are images that represent an individual Post, Page, or Custom Post Type.</p> -->
		                    <!--Dropzonejs-->
		                    <!--===================================================-->
		                    <div class="dropzone-container">
		                        <form id="demo-dropzone" action="#">
		                            <div class="dz-default dz-message">
		                                <div class="dz-icon">
		                                    <i class="demo-pli-upload-to-cloud icon-5x"></i>
		                                </div>
		                                <div>
		                                    <span class="dz-text">Drop files to upload</span>
		                                    <p class="text-sm text-muted">or click to pick manually</p>
		                                </div>
		                            </div>
		                            <div class="fallback">
		                                
		                                    <input name="file[]" type="file" multiple>
		                               
		                            </div>
		                        </form>
		                    </div>
		                    <!--===================================================-->
		                    <!-- End Dropzonejs -->
		
		
		                    <hr>
		
		                    
		
		                    <hr>
		
		                    <!-- <p class="text-main text-sm text-uppercase text-bold">Public Settings</p>
		                    <div class="form-horizontal">
		                        <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Allow comments</label>
		                            <div class="col-sm-7">
		                                <input class="toggle-switch" id="demo-allow-comments" type="checkbox" checked>
		                                <label for="demo-allow-comments"></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-sm-5 control-label text-left" for="demo-hor-inputpass">Allow trackbacks</label>
		                            <div class="col-sm-7">
		                                <input class="toggle-switch" id="demo-allow-tbpb" type="checkbox">
		                                <label for="demo-allow-tbpb"></label>
		                            </div>
		                        </div>
		                    </div> -->
		
		
		                </div>
		            </div>
		
		
		        </div>
		        <div class="fluid">
		            <!-- <div class="form-group">
		                <input type="text" name="title" placeholder="Blog Title" class="form-control input-lg" autofocus>
		            </div> -->
		
		            <div class="panel">
		                <div class="panel-body">
		                    <textarea id="demo-summernote" name="message">
		                        
		                    </textarea>
		                </div>
		
		            </div>
		        </div>
		    </div>
		</form>
    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
   


@endsection