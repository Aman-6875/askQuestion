<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }

    public function question(){
        return $this->belongsTo(Question::class,'question_id')->withDefault();
    }

    public function helpful_count(){
        return $this->hasMany(CommentHelpfulInfo::class,'comment_id');
    }

   
}
