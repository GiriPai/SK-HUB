<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Staff;
use App\User;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Question;
use App\Models\StudentAnswer;

class Department extends Model
{
    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function staff()
    {
    	return $this->hasMany(Staff::class);
    }
    public function user()
    {
    	return $this->hasMany(User::class);
    }
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }

    public function studentanswer()
    {
      return $this->hasManyThrough(StudentAnswer::class,Question::class);
    }
}
