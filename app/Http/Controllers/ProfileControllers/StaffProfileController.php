<?php

namespace App\Http\Controllers\ProfileControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Question;
use App\Models\StaffAnswer;
use App\Models\StudentAnswer;
use Auth;

class StaffProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $myprofile = Staff::with(['course.department'])
                            ->where('id','=',Auth::guard('staff')->user()->id)
                            ->limit(1)
                            ->get();
      // return $myprofile;

      $myanswers = StaffAnswer::with([
                                          'staff.course.department',
                                          'question.user.course.department',
                                          'question.comment',
                                          'question.studentanswer',
                                          'question.staffanswer',
                                          'staffanswervote',
                                          'staff.department'
                                      ])
                                  ->where('staff_id','=',Auth::guard('staff')->user()->id)
                                  ->orderBy('created_at','desc')
                                  ->limit(6)
                                  ->get();
      // return $myanswers;


        return view('Staffs.profile',[
                                        'myprofile' => $myprofile,
                                        'myanswers' => $myanswers
                                      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
          $user = Staff::with(['course','department'])->where('id','=',Auth::guard('staff')->user()->id)->get();
          // return $user;
          return view('Staffs.profile-edit',['user' => $user]);
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
      $s = Staff::where('id','=',Auth::guard('staff')->user()->id)->first();

      $s->address = $request->address;
      $s->city = $request->city;
      $s->zip = $request->zip;
      $s->degree = $request->degree;
      $s->designation = $request->designation;
      $s->experience = $request->experience;
      $s->phone = $request->phone;

      if($request->hasFile('pic'))
      {
          $pic = $s->roll_no;
          $pic = $pic.'.jpg';
          $path =  $request->file('pic')->storeAs('public/profile',$pic);
          $s->pic = $path;
      }else {
          $s->pic = $request->picval;
      }

      if($request->hasFile('cv'))
      {
          $f = $s->roll_no;
          $ext = $request->file('cv')->getClientOriginalExtension();
          $cv = $f.'.'.$ext;
          // return $cv;
          $path =  $request->file('cv')->storeAs('public/cv',$cv);
          $s->cv = $path;
      }
      else {
          $s->cv = $request->cvval;
      }

      $s->save();
      return redirect()->route('staffprofile.index')->with('message','Profile Updated Successfully....');
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

    public function bio(Request $request)
    {
      $user = Staff::find(Auth::guard('staff')->user()->id);
      $user->bio = $request->bio;
      $user->save();
      return redirect()->back();
    }

    public function staff_view_staff($id,Request $request)
    {
      $myprofile = Staff::with(['course.department'])
                            ->where('id','=',$id)
                            ->limit(1)
                            ->get();
      // return $myprofile;

      $myanswers = StaffAnswer::with([
                                          'staff.course.department',
                                          'question.user.course.department',
                                          'question.comment',
                                          'question.studentanswer',
                                          'question.staffanswer',
                                          'staffanswervote',
                                          'staff.department'
                                      ])
                                  ->where('staff_id','=',$id)
                                  ->orderBy('created_at','desc')
                                  ->limit(6)
                                  ->get();
      // return $myanswers;


        return view('Staffs.viewprofile.staff-view-staff',[
                                        'myprofile' => $myprofile,
                                        'myanswers' => $myanswers
                                      ]);
    }

    public function admin_view_staff($id,Request $request)
    {
      $myprofile = Staff::with(['course.department'])
                            ->where('id','=',$id)
                            ->limit(1)
                            ->get();
      // return $myprofile;

      $myanswers = StaffAnswer::with([
                                          'staff.course.department',
                                          'question.user.course.department',
                                          'question.comment',
                                          'question.studentanswer',
                                          'question.staffanswer',
                                          'staffanswervote',
                                          'staff.department'
                                      ])
                                  ->where('staff_id','=',$id)
                                  ->orderBy('created_at','desc')
                                  ->limit(6)
                                  ->get();
      // return $myanswers;


        return view('Staffs.viewprofile.admin-view-staff',[
                                        'myprofile' => $myprofile,
                                        'myanswers' => $myanswers
                                      ]);
    }

    public function superadmin_view_staff($id,Request $request)
    {
      $myprofile = Staff::with(['course.department'])
                            ->where('id','=',$id)
                            ->limit(1)
                            ->get();
      // return $myprofile;

      $myanswers = StaffAnswer::with([
                                          'staff.course.department',
                                          'question.user.course.department',
                                          'question.comment',
                                          'question.studentanswer',
                                          'question.staffanswer',
                                          'staffanswervote',
                                          'staff.department'
                                      ])
                                  ->where('staff_id','=',$id)
                                  ->orderBy('created_at','desc')
                                  ->limit(6)
                                  ->get();
      // return $myanswers;


        return view('Staffs.viewprofile.superadmin-view-staff',[
                                        'myprofile' => $myprofile,
                                        'myanswers' => $myanswers
                                      ]);
    }

    public function student_view_staff($id,Request $request)
    {
      $myprofile = Staff::with(['course.department','department'])
                            ->where('id','=',$id)
                            ->limit(1)
                            ->get();
      // return $myprofile;

      $myanswers = StaffAnswer::with([
                                          'staff.course.department',
                                          'question.user.course.department',
                                          'question.comment',
                                          'question.studentanswer',
                                          'question.staffanswer',
                                          'staffanswervote',
                                          'staff.department'
                                      ])
                                  ->where('staff_id','=',$id)
                                  ->orderBy('created_at','desc')
                                  ->limit(6)
                                  ->get();
      // return $myanswers;

        return view('Staffs.viewprofile.student-view-staff',[
                                        'myprofile' => $myprofile,
                                        'myanswers' => $myanswers
                                      ]);
      }
}
