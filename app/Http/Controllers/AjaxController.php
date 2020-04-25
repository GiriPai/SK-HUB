<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Course;
use App\Models\Staff;
use App\Models\StaffAnswerVote;
use App\User;
use App\Models\StaffAnswer;
use Auth;


class AjaxController extends Controller
{
    public static function classes_of_dept_id($id)
    {
        $classes = Course::where('department_id','=',$id)->get();
        return $classes;
    }

    public static function staffs_of_dept_id($id)
    {
        // return $id;
        $staffs = Staff::where('department_id','=',$id)->get();
        return $staffs;
    }

    public function student_on_staffans(Request $request){
        $rowline = StaffAnswer::find($request->staffanswerID);
        // return $rowline;
        if($rowline)
        {
            if($request->isLike === 'true') // like button clicked
            {
                $staffvoterow = StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                            ->where('user_id','=',Auth::guard()->user()->id)
                            ->get();
                            // return $staffvoterow;
                if($staffvoterow->count())
                {
                    foreach($staffvoterow as $row)
                    {
                        // return $row->status;
                        if($row->status == 0)
                        {
                            $update = StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                                    ->where('user_id','=',Auth::guard()->user()->id)
                                    ->first();

                            $update->status = '1';
                            $update->save();
                            return "updated";
                        }
                        else
                        {
                             StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                                    ->where('user_id','=',Auth::guard()->user()->id)
                                    ->delete();
                            return "deleted";
                        }
                    }
                }
                else
                {
                    $insert = new StaffAnswerVote();
                    $insert->user_id = Auth::guard()->user()->id;
                    $insert->staff_answer_id = $request->staffanswerID;
                    $insert->status = '1';
                    $insert->save();
                    return "inserted";
                }
            }
            else  // Dislike button clicked
            {
                $staffvoterow = StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                            ->where('user_id','=',Auth::guard()->user()->id)
                            ->get();
                            // return $staffvoterow;
                if($staffvoterow->count())
                {
                    foreach($staffvoterow as $row)
                    {
                        // return $row->status;
                        if($row->status == 1)
                        {
                            $update = StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                                    ->where('user_id','=',Auth::guard()->user()->id)
                                    ->first();

                            $update->status = '0';
                            $update->save();
                            return " dislike updated";
                        }
                        else
                        {
                             StaffAnswerVote::where('staff_answer_id','=',$request->staffanswerID)
                                    ->where('user_id','=',Auth::guard()->user()->id)
                                    ->delete();
                            return "dislike deleted";
                        }
                    }
                }
                else
                {
                    $insert = new StaffAnswerVote();
                    $insert->user_id = Auth::guard()->user()->id;
                    $insert->staff_answer_id = $request->staffanswerID;
                    $insert->status = '0';
                    $insert->save();
                    return "dislike inserted";
                }
            }
        }
        else
        {
            return "not present";
        }
    }
  
}
