<?php

namespace App\Http\Controllers\SuperadminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

use App\Models\Staff;
use App\Models\Department;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::with(['department.course'])->get();
       
        // return $staffs;
        return view('Superadmins.staffs.all_staffs',['staffs'=>$staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $departments = Department::all();
        return view('Superadmins.staffs.create_staffs',['departments'=>$departments]);
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
        $staff = new Staff();
        $staff->fname = $request->fname;
        $staff->lname = $request->lname;
        $staff->email = $request->email;
        $staff->roll_no = $request->roll_no;
        $staff->password = Hash::make($request->password);
        $staff->department_id = $request->department;
        $staff->status = $request->radio;
        if($staff->save())
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
        $staffs = Staff::find($id);
        $departments = Department::all();
        // return $staffs;
        return view('Superadmins.staffs.edit_staffs',['staffs' => $staffs,'departments'=>$departments]);
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
        $staff =Staff::find($id);
        $staff->fname = $request->fname;
        $staff->lname = $request->lname;
        $staff->email = $request->email;
        $staff->roll_no = $request->roll_no;
        // $staff->password = $request->password;
        $staff->department_id = $request->department;
        $staff->status = $request->radio;
        if($staff->save())
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
