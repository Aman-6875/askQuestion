<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function allComments()
    {
        $comments = Comment::with('question', 'user')->get();

        return view('admin.pages.comment.index')->with('comments', $comments);
    }
    public function allQuestions()
    {
        $questions = Question::with('user', 'category', 'comments')->get();

        return view('admin.pages.questions.index')->with('questions', $questions);
    }
    public function allUsers()
    {
        $users = User::with('questions', 'comments')->get();

        return view('admin.pages.user.index')->with('users', $users);
    }
    public function deleteQuestion($id)
    {
        Question::where('id', $id)->delete();
        return back();
    }
    public function deleteComment($id)
    {
        Comment::where('id', $id)->delete();
        return back();
    }
    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return back();
    }
}
