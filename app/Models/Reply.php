<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\User;

class Reply extends Model
{
    public function comment()
    {
    	return $this->belongsTo(Comment::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
