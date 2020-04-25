<?php

namespace App\Http\Controllers\StaffControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Announcement;
use Auth;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::with(['staff','department','course'])
                                        ->where('department_id','=',Auth::guard('staff')->user()->department_id)->orderBy('created_at','desc')
                                        ->get();
        // return $announcements;
        return view('Staffs.announcements.view_announcements',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('department_id','=',Auth::guard('staff')->user()->department_id)->get();
        return view('Staffs.announcements.create_announcements',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        if($request->hasFile('file')){
            foreach($request->file as $file)
            {
                $filename=$file->getClientOriginalName();
                $path =  $file->storeAs('public/announcements',$filename);
                $files[] = $path; 
            }

            $a = new Announcement();
            $a->staff_id = Auth::guard('staff')->user()->id;
            $a->course_id = $request->course_id;
            $a->department_id = Auth::guard('staff')->user()->department_id;
            $a->message = $request->message;
            $a->img = serialize($files);
            $a->save();

        }
        else
        {
            $a = new Announcement();
            $a->staff_id = Auth::guard('staff')->user()->id;
            $a->course_id = $request->course_id;
            $a->department_id = Auth::guard('staff')->user()->department_id;
            $a->message = $request->message;
            $a->save();
        }

        return redirect()->route('announcements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
