<?php

namespace App\Http\Controllers\StudentControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\StudentAnswer;
use Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $sa = new StudentAnswer();
        $sa->user_id = Auth::guard()->user()->id;
        $sa->question_id = $request->question_id;
        $sa->student_answer = $request->studentanswer;
        $sa->status = '0';
        $sa->save();
        return redirect()->back()->with('message','Thanks for your response. Your Post is waiting for approval from admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_questions = Question::with([
                        'user',
                        'staffanswer'=>function($query){

                            $query->with('staffanswervote')->get();

                        },
                        'comment'=>function($query){
                            $query->with(['user','reply'=>function($query){
                                $query->with('user')
                                        ->where('status','=','1')
                                        ->orderBy('created_at','desc')->get();
                            }])->orderBy('created_at','desc')->get();
                        },
                        'studentanswer'=>function($query){
                                 $query->with('user')
                                 ->where('status','=','1')
                                 ->orderBy('created_at','desc')
                                 ->get();}
                    ])
                        ->where('id','=',$id)
                        ->orderBy('created_at','desc')
                        ->get();
        // return $show_questions;
        return view('Students.view_question',['show_questions'=>$show_questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
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

    public function myanswers()
    {
        $myanswers = StudentAnswer::with([
                                            'user.course.department',
                                            'question.user.course.department',
                                            'question.comment',
                                            'question.studentanswer',
                                            'question.staffanswer'
                                        ])
                                    ->where('user_id','=',Auth::guard()->user()->id)
                                    ->orderBy('created_at','desc')
                                    ->get();
        // return $myanswers;
        return view('Students.my_answers',['myanswers'=>$myanswers]);
    }
}
