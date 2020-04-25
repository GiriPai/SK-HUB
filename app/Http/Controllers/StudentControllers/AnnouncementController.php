<?php

namespace App\Http\Controllers\StudentControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\StudentAnswer;
use App\Models\Announcement;
use App\Models\Staff;
use Auth;

class AnnouncementController extends Controller
{
    public static function announcements()
    {
        return Announcement::with('staff')->where('course_id','=',Auth::guard()->user()->course_id)->limit(5)->orderBy('created_At','desc')->get();
    }
}
