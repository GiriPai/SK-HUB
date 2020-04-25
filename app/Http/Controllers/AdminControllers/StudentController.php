<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Department;
use Auth;
use App\Models\Course;
use Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::with(['course.department'])
                        ->where('department_id','=',Auth::guard('admin')->user()->department_id)
                        ->orderBy('roll_no','asc')
                        ->get();
       
        // return $students;
        return view('admins.students.all_students',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('department_id','=',Auth::guard('admin')->user()->department_id)->get();
        // return $courses;
        return view('admins.students.create_students',['courses'=>$courses]);
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
        $stu = new User();
        $stu->fname = $request->fname;
        $stu->lname = $request->lname;
        $stu->email = $request->email;
        $stu->roll_no = $request->roll_no;
        $stu->password =  Hash::make($request->password);
        $stu->department_id = $request->department;
        $stu->course_id = $request->course;
        $stu->status = $request->radio;
        if($stu->save())
        {
            return redirect()->back()->with('message',"Creation successfull");
        }
        else
        {
            return redirect()->back()->with('message',"Creation unsuccessfull, Email provided already exists");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = User::where('id','=',$id)
                        ->where('department_id','=',Auth::guard('admin')->user()->department_id)
                        ->get();
        $courses = Course::where('department_id','=',Auth::guard('admin')->user()->department_id)->get();
        // return $students;
        return view('admins.students.edit_students',['students' => $students,'courses'=>$courses]);
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
        // return $request;
        $students =User::find($id);
        $students->fname = $request->fname;
        $students->lname = $request->lname;
        $students->email = $request->email;
        $students->roll_no = $request->roll_no;
        // $students->password = Hash::make($request->password);
        $students->department_id = $request->department;
        $students->course_id = $request->course;
        $students->status = $request->radio;
        if($students->save())
        {
            return redirect()->back()->with('message',"Updation successfull");
        }
        else
        {
            return redirect()->back()->with('message',"Updation unsuccessfull, Email provided already exists");
        }
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
