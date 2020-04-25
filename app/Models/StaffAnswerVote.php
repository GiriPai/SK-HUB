<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StaffAnswer;
use App\User;

class StaffAnswerVote extends Model
{
    public function staffanswer()
    {
    	return $this->belongsTo(StaffAnswer::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
