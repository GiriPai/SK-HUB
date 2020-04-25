<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\StaffResetPasswordNotification;

use App\Models\Course;
use App\Models\Department;
use App\Models\Staff;
use App\Models\Announcemnt;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $guard = 'staff';
    protected $table = 'staffs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StaffResetPasswordNotification($token));
    }


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function staffanswer()
    {
        return $this->hasMany(Staff::class);
    }
    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }
}
