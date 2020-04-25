<?php

namespace App\Http\Controllers\SuperadminControllers;

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

class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $questions = Question::all();
        // return $questions;

        $studentanswers = StudentAnswer::all();
        // return $studentanswers;

        $staffanswers = StaffAnswer::all();
        // return $staffanswers;

        $all_staffs  = Staff::all();
        // return $all_staffs;

        $all_students  = User::all();
        // return $all_students;

        $all_courses = Course::all();
        // return $all_courses;

        $all_books = Book::all();
        // return $all_books;

        //Activities
        return view('superadmins.dashboard',[
                                    'questions'         => $questions,
                                    'studentanswers'    => $studentanswers,
                                    'staffanswers'      => $staffanswers,
                                    'all_books'         => $all_books,
                                    'all_staffs'        => $all_staffs,
                                    'all_students'      => $all_students,
                                    'all_courses'       => $all_courses
                                ]);
    }
}
