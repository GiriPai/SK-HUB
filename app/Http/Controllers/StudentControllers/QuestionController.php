<?php

namespace App\Http\Controllers\StudentControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Auth;

class QuestionController extends Controller
{
    public function create(){
    	return view('Students.create_question');
    }


    public function store(Request $request){
    	// return $request->file;
    	$q = new Question();
    	$q->department_id = $request->department_id;
    	$q->user_id = Auth::user()->id;
    	$q->title = $request->title;
    	$q->question = $request->content;

    	if($request->hasFile('file'))
          {
          	// return $request->file;
              $pic = $request->title;
              $pic = $pic.'.jpg';
              $path =  $request->file('file')->storeAs('public/questions',$pic);
              $q->ques_img = $path;
          }else {
              $q->ques_img = null;
          }

        $q->status = '0';
        $q->save();
        return redirect()->route('home')->with('message',"Your question has been recorded and waiting for the approval from admins");
    }

    public function show($id){

    	$questions = Question::with(['user.course.department','staffanswer','studentanswer','comment'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('department_id','=',$id)
                                ->orderBy('created_at','desc')
                                ->get();
      // return $questions;
    	return view('Students.show_questions',['questions'=>$questions]);
    }


    public function myquestions()
    {
      $myquestions =  Question::with(['user.course.department','staffanswer','comment','studentanswer'])
                                ->where('status','!=','0')
                                ->where('status','!=','9')
                                ->where('user_id','=',Auth::user()->id)
                                ->orderBy('updated_at','desc')
                                ->get();
      // return $myquestisons;
     return view('Students.my_questions',['myquestions'=>$myquestions]);
    }

    public static function get_questions_posted_approved_answered()
    {
    	$questions = Question::where('status','!=','0')->where('status','!=','9')->get();
    	return $questions;
    }

}
