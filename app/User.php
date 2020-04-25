<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Question;
use App\Models\Course;
use App\Models\StudentAnswer;
use App\Models\StaffAnswer;
use App\Models\StaffAnswerVote;
use App\Models\Comment;
use App\Models\Department;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roll_no','fname','lname', 'email','father','address','city','zip','phone','pic','bio', 'department_id', 'course_id','status','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function studentanswer()
    {
        return $this->hasMany(StudentAnswer::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function staffanswervote()
    {
        return $this->hasMany(StaffAnswerVote::class);
    }

    // public function department()
    // {
    //   return $this->hasMany(Department::class);
    // }
}
