<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Staff;
use App\Models\StaffAnswerVote;
use Auth;

class StaffAnswer extends Model
{
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
    public function staff()
    {
    	return $this->belongsTo(Staff::class);
    }
    public function staffanswervote(){
    	return $this->hasMany(StaffAnswerVote::class,'staff_answer_id');
    }

  
}
