<?php

namespace App\Http\Controllers\StudentControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::with(['user.course.department','staffanswer','comment'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->orderBy('created_at','desc')
                                ->paginate(30);
        // return $questions;

        return view('Students.dashboard',['questions'=>$questions]);
    }
}
