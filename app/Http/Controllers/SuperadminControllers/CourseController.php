<?php

namespace App\Http\Controllers\SuperadminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Staff;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('department','staff')->get();
        // return $courses;
        return view('Superadmins.courses.all_courses',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Superadmins.courses.create_courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $c = new Course();
        $c->department_id = $request->department_id;
        $c->course_name = $request->course_name;
        $c->staff_id = $request->staff_id;
        $c->status = $request->radio;
        $c->save();
        return redirect()->back()->with('message','Record Submitted Successfully');
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
        $courses = Course::find($id);
        // return $courses;
        return view('Superadmins.courses.edit_courses',['courses'=>$courses]);
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
            // return $request;
            $c = Course::find($id);
            $c->department_id = $request->department_id;
            $c->course_name = $request->course_name;
            $c->staff_id = $request->staff_id;
            $c->status = $request->radio;
            $c->save();
            return redirect()->back()->with('message','Record Updated Successfully');
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
