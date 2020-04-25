<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Question;


class Comment extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    public function reply()
    {
    	return $this->hasMany(Reply::class);
    }
    
}
