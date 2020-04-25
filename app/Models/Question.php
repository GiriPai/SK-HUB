<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Staff;
use App\User;
use App\Models\Department;
use App\Models\StaffAnswer;
use App\Models\Comment;


class Question extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function staffanswer()
    {
    	return $this->hasMany(StaffAnswer::class);
    }

    public function studentanswer()
    {
        return $this->hasMany(StudentAnswer::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
