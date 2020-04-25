<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\StaffAnswer;
use App\Models\StudentAnswer;
use App\Models\Comment;
use App\Models\Staff;
use App\Models\StaffAnswerVote;
use App\Models\Department;
use App\Models\Course;
use App\Models\Question;
use App\Models\Book;
use App\Models\Announcement;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::where('department_id',Auth::guard('admin')->user()->department_id)->get();
        // return $questions;

        $studentanswers = StudentAnswer::with(['question','user.course'])->whereHas('question', function ($query) {
                  $query->where('department_id', Auth::guard('admin')->user()->department_id);
              })->get();
        // return $studentanswers;

        $staffanswers = StaffAnswer::with(['question','staff'])->whereHas('question', function ($query) {
                  $query->where('department_id', Auth::guard('admin')->user()->department_id);
              })->get();
        // return $staffanswers;

        $all_staffs  = Staff::with(['department.course'])
                        ->where('department_id','=',Auth::guard('admin')->user()->department_id)
                        ->get();
        // return $all_staffs;

        $all_students  = User::with(['course.department'])
                        ->where('department_id','=',Auth::guard('admin')->user()->department_id)
                        ->orderBy('roll_no','asc')
                        ->get();
        // return $all_students;

        $all_courses = Course::with('department','staff')->where('department_id','=',Auth::guard('admin')->user()->department_id)->get();
        // return $all_courses;

        $all_books = Book::all();
        // return $all_books;

        //Activities

        return view('Admins.dashboard',[
                                    'questions'         => $questions,
                                    'studentanswers'    => $studentanswers,
                                    'staffanswers'      => $staffanswers,
                                    'all_books'         => $all_books,
                                    'all_staffs'        => $all_staffs,
                                    'all_students'      => $all_students,
                                    'all_courses'       => $all_courses
        ]);
//
        $all_questions = Question::with('user.course')->where('department_id','=',Auth::guard('admin')->user()->department_id)->orderBy('created_at','desc')->get();

        // return $all_questions;
        return view('Admins.questions.all_questions',['all_questions' => $all_questions]);
    }
}
