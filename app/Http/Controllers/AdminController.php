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
        $questions = Question::with('user', 'category', 'comments')->get();

        return view('admin.pages.questions.index')->with('questions', $questions);
    }
    public function deleteQuestion($id)
    {
        Question::where('id', $id)->delete();
        return back();
    }
}
