<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function allComments()
    {
        return  $comments = Comment::with('question', 'user')->get();

        return view('admin.pages.comment.index');
    }
    public function allQuestions()
    {
        return  $questions = Question::with('user')->get();

        return view('admin.pages.comment.index');
    }
}
