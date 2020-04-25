<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;
use App\Models\Course;
use App\Models\Department;

class Announcement extends Model
{
    public function staff(){
    	return $this->belongsTo(Staff::class);
    }
    public function course(){
    	return $this->belongsTo(Course::class);
    }
    public function department(){
    	return $this->belongsTo(Department::class);
    }
}
