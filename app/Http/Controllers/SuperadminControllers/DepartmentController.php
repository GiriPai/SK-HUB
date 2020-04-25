<?php

namespace App\Http\Controllers\SuperadminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep_list = Department::orderBy('department_name','desc')->get();
        return view('Superadmins.departments.all_departments',['dep_list'=>$dep_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Superadmins.departments.create_departments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ins = new Department();
        $ins->department_full_name=$request->full_name;
        $ins->department_name = $request->short_name;
        $ins->status = $request->radio;
        $ins->save();
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
        $department = Department::find($id);
        return view('Superadmins.departments.edit_departments',['department' => $department]);
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
        $d = Department::find($id);
        $d->department_name = $request->short_name;
        $d->department_full_name = $request->full_name;
        $d->status = $request->radio;
        $d->save();
        return redirect()->back()->with('message','Department Updated Successfully');
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

    public static function get_all_departments()
    {
      $departments = Department::where('status','1')->orderBy('department_name','desc')->get();
      return $departments;
    }
}
