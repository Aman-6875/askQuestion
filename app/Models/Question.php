<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function comments()
  {
    return  $this->hasMany(Comment::class, 'question_id')->orderBy('id', 'asc');
  }
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id')->withDefault();
  }

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id')->withDefault();
  }
}
