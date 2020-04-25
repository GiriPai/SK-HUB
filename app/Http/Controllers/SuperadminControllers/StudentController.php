<?php

namespace App\Http\Controllers\SuperadminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

use App\User;
use App\Models\Department;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::with(['course.department'])->get();
       
        // return $students;
        return view('Superadmins.students.all_students',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('Superadmins.students.create_students',['departments'=>$departments]);
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
        $students = User::find($id);
        $departments = Department::all();
        // return $students;
        return view('Superadmins.students.edit_students',['students' => $students,'departments'=>$departments]);
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
        if($request->action == "save"){
                $students =User::find($id);
                $students->fname = $request->fname;
                $students->lname = $request->lname;
                $students->email = $request->email;
                $students->roll_no = $request->roll_no;
                $students->password =  Hash::make($request->password);
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
        else{
            return redirect()->back();
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
