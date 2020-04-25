<?php

namespace App\Http\Controllers\StaffControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Auth;
use App\User;
use App\Models\Department;
use App\Models\StaffAnswer;


class StaffAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $answer = new StaffAnswer();
        $answer->staff_id = Auth::guard('staff')->user()->id;
        $answer->question_id = $request->question_id;
        $answer->staff_ans = $request->answer;
        $answer->save();
        return redirect()->back()->with('message','Your answer has been recorded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::with(['user.course','staffanswer.staff','studentanswer.user','comment'])
                                ->where('id','=',$id)
                                ->get();
        // return $question;
        return view('Staffs.view_question',['question'=>$question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function my_answers()
    {
        $staff_answers = StaffAnswer::with(['question.user.course','question.studentanswer','question.staffanswer','question.comment'])
                                    ->where('staff_id','=',Auth::guard('staff')->user()->department_id)
                                    ->orderBy('created_at','desc')
                                    ->get();
        // return $staff_answers;
        return view('Staffs.my_answers',['staff_answers'=>$staff_answers]);
    }
}
