<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Staff;
use App\Models\Course;
use App\Models\Question;
use App\Models\Announcement;
use App\User;

class Course extends Model
{
    public function department()
    {
      return $this->belongsTo(Department::class);
    }

    public function staff()
    {
    	return $this->belongsTo(Staff::class);
    }
    public function user()
    {
    	return $this->hasMany(User::class);
    }
    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }
}
