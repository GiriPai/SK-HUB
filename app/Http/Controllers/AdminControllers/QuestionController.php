<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\User;
use Auth;

class QuestionController extends Controller
{
    public function index()
    {
    	$all_questions = Question::with('user.course')->where('department_id','=',Auth::guard('admin')->user()->department_id)->orderBy('created_at','desc')->get();
    	// return $all_questions;
    	return view('Admins.questions.all_questions',['all_questions' => $all_questions]);
    }
    public function edit($id)
    {
    	$question = Question::find($id);
    	return view('Admins.questions.show_questions',['question' => $question]);
    }

    public function update(Request $request,$id)
    {
      // return $request->status;
    	$update = Question::find($id);
    	$update->status = $request->status;
    	$update->save();
    	return redirect()->route('admin.questions.index')->with('message','Action Successfull');
    }
}
