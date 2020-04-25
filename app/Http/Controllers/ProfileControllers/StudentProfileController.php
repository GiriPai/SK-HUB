<?php

namespace App\Http\Controllers\ProfileControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\StudentAnswer;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Department;
use Auth;
use App\Models\Reply;
use App\Models\Question;
use Storage;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myprofile = User::with(['course.department'])
                              ->where('id','=',Auth::guard()->user()->id)
                              ->limit(1)
                              ->get();
        // return $myprofile;
        $myquestions = Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',Auth::guard()->user()->id)
                                ->orderBy('updated_at','desc')
                                ->limit(6)
                                ->get();
        // return $myquestions;
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',Auth::user()->id)
                                    ->orderBy('created_at','desc')
                                    ->limit(6)
                                    ->get();
        // return $myanswers;
        return view('Students.profile',['myquestions'=>$myquestions,
                                        'myanswers'=>$myanswers,
                                        'myprofile' =>$myprofile]);
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
    public function show($id,Request $request)
    {
        // $user = User::with([' course.department', 'question','answer'])->where('id','=',$id)->limit(1)->get();
        // return $user;

        $myprofile = User::with(['course.department'])
                              ->where('id','=',$id)
                              ->limit(1)
                              ->get();
        // return $myprofile;
        $myquestions = Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',$id)
                                ->orderBy('updated_at','desc')
                                ->limit(6)
                                ->get();
        // return $myquestions;
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',$id)
                                    ->orderBy('created_at','desc')
                                    ->limit(6)
                                    ->get();
        // return $myanswers;
        // return $request->path();
        // if($request->path() )
        return view('profile.student_profile',[ 'myprofile'   =>  $myprofile,
                                                'myquestions' => $myquestions,
                                                'myanswers'   => $myanswers
                                                  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with(['course.department'])->where('id','=',Auth::guard()->user()->id)->get();
        // return $user;
        return view('Students.profile-edit',['user' => $user]);
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
      $s = User::where('id','=',Auth::guard()->user()->id)->first();

      $s->address = $request->address;
      $s->city = $request->city;
      $s->zip = $request->zip;
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
      }else {
          $s->cv = $request->cvval;
      }

      $s->save();
      return redirect()->route('studentprofile.index')->with('message','Profile Updated Successfully....');
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
      $user = User::find(Auth::guard()->user()->id);
      $user->bio = $request->bio;
      $user->save();
      return redirect()->back();
    }

    public function downloadcv()
    {
        $user = User::find(Auth::guard()->user->id);
    //PDF file is stored under project/public/download/info.pdf
        $file=  public_path().Storage::url($user->cv);

        $headers = array(
                  'Content-Type: application/docx',
                );

        return Response::download($file, 'file.docx', $headers);
      }




      //profiles

    public function staff_view_student($id,Request $request)
    {
        // $user = User::with([' course.department', 'question','answer'])->where('id','=',$id)->limit(1)->get();
        // return $user;

        $myprofile = User::with(['course.department'])
                              ->where('id','=',$id)
                              ->limit(1)
                              ->get();
        // return $myprofile;
        $myquestions = Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',$id)
                                ->orderBy('updated_at','desc')
                                ->limit(6)
                                ->get();
        // return $myquestions;
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',$id)
                                    ->orderBy('created_at','desc')
                                    ->limit(6)
                                    ->get();
        // return $myanswers;
        // return $request->path();
        // if($request->path() )
        return view('Students.viewprofile.staff-view-student',[ 'myprofile'   =>  $myprofile,
                                                'myquestions' => $myquestions,
                                                'myanswers'   => $myanswers
                                                  ]);
    }

    public function admin_view_student($id,Request $request)
    {
        // $user = User::with([' course.department', 'question','answer'])->where('id','=',$id)->limit(1)->get();
        // return $user;

        $myprofile = User::with(['course.department'])
                              ->where('id','=',$id)
                              ->limit(1)
                              ->get();
        // return $myprofile;
        $myquestions = Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',$id)
                                ->orderBy('updated_at','desc')
                                ->limit(6)
                                ->get();
        // return $myquestions;
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',$id)
                                    ->orderBy('created_at','desc')
                                    ->limit(6)
                                    ->get();
        // return $myanswers;
        // return $request->path();
        // if($request->path() )
        return view('Students.viewprofile.admin-view-student',[ 'myprofile'   =>  $myprofile,
                                                'myquestions' => $myquestions,
                                                'myanswers'   => $myanswers
                                                  ]);
    }

    public function superadmin_view_student($id,Request $request)
    {
        // $user = User::with([' course.department', 'question','answer'])->where('id','=',$id)->limit(1)->get();
        // return $user;

        $myprofile = User::with(['course.department'])
                              ->where('id','=',$id)
                              ->limit(1)
                              ->get();
        // return $myprofile;
        $myquestions = Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',$id)
                                ->orderBy('updated_at','desc')
                                ->limit(6)
                                ->get();
        // return $myquestions;
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',$id)
                                    ->orderBy('created_at','desc')
                                    ->limit(6)
                                    ->get();
        // return $myanswers;
        // return $request->path();
        // if($request->path() )
        return view('Students.viewprofile.superadmin-view-student',[ 'myprofile'   =>  $myprofile,
                                                'myquestions' => $myquestions,
                                                'myanswers'   => $myanswers
                                                  ]);
    }

}
