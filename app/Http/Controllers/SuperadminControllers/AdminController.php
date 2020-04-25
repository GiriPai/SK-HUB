<?php

namespace App\Http\Controllers\SuperAdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Department;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::with('department')->get();
        // return $admins;
        return view('Superadmins.admins.all_admins',['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('Superadmins.admins.create_admins',['departments' =>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->action == "save"){
            $admin = new Admin();
            $admin->department_id =$request->department;
            $admin->name =$request->name;
            $admin->email =$request->email;
            $admin->password =Hash::make($request->password);
            $admin->status =$request->radio;
            if($admin->save()){
                return redirect()->back()->with('message','New Admin created successfully');
            }
            else
            {
                return redirect()->back()->with('message','Email already exists. Creation unsuccessfull');
            }
        }
        else
        {
            return redirect()->back();
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
        $admin = Admin::with('department')->where('id',$id)->get();
        $department = Department::all();
        return view('Superadmins.admins.edit_admins',['admin' => $admin, 'department' => $department]);
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
        if($request->action == 'save'){
            $update = Admin::find($id);
            $update->name = $request->fname;
            $update->email = $request->email;
            $update->status = $request->radio;
            $update->save();
            return redirect()->back()->with('status',"Updated successfully");
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
