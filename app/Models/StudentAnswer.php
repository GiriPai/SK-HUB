<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

use App\User;

class StudentAnswer extends Model
{
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    // public function department()
    // {
    //   return $this->question->department;
    // }

}
