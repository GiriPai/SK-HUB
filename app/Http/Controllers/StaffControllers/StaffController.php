<?php

namespace App\Http\Controllers\StaffControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\Question;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::with(['user.course','staffanswer','studentanswer','comment'])
                                ->where('department_id','=',Auth::guard('staff')->user()->department_id)
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->orderBy('created_at','desc')
                                ->get();
        // return $questions;
        return view('Staffs.dashboard',['questions'=>$questions]);
    }
}

