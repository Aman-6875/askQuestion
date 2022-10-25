<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')->paginate(20);
        return view('frontend.pages.home')->with('questions', $questions);
    }

    public function singleQuestion($id)
    {
        $question = Question::where('id', $id)->with('comments')->first();
        return view('frontend.pages.question_details')->with('question', $question);
    }
    public function questionForm()
    {
        return view('frontend.pages.ask_question');
    }
    public function userProfile()
    {
        return view('frontend.pages.user_profile');
    }

    public function editProfile()
    {
        $user = User::where('id', Auth::user()->id)->with('userMeta')->first();

        return view('frontend.pages.edit_profile')->with('user', $user);
    }
    public function updateUserProfile(Request $request)
    {
        // return $request->all();
        unset($request['_token']);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $image_name = time() . '.' . 'file' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/profile');
            $image->move($destinationPath, $image_name);
            $request['image'] = $image_name;
        }
        if ($request->password == null) {

            unset($request['password']);
            unset($request['file']);
            // dd($request->all());
            $userData = [
                'name' => $request->name,
                'email' => $request->email,
            ];
            User::where('id', Auth::user()->id)->update($userData);
            $userMeta = UserMeta::where('user_id', Auth::user()->id)->first();
            if ($userMeta) {
                UserMeta::where('user_id', Auth::user()->id)->update($request->except(['name', 'email', 'file']));
            } else {
                $request['user_id'] = Auth::user()->id;
                UserMeta::create($request->except(['name', 'email']));
            }
        } else {
            unset($request['file']);
            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];

            // dd(Auth::user()->id);
            User::where('id', Auth::user()->id)->update($userData);
            $userMeta = UserMeta::where('user_id', Auth::user()->id)->first();
            if ($userMeta) {
                UserMeta::where('user_id', Auth::user()->id)->update($request->except(['name', 'email', 'password', 'file']));
            } else {
                $request['user_id'] = Auth::user()->id;
                UserMeta::create($request->except(['name', 'email', 'password', 'file']));
            }
        }

        return view('frontend.pages.user_profile');
    }
    public function storeQuestion(Request $request)
    {
        // return $request->all();
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $image_name = time() . '.' . 'file' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/questions');
            $image->move($destinationPath, $image_name);
            $request['image'] = $image_name;
        }


        if ($request->has('file')) {
            $data = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'tags' => $request->tags,
                'user_id' => Auth::user()->id,
                'description' => $request->description,
                'file' => $request['image']
            ];
        } else {
            $data = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'tags' => $request->tags,
                'user_id' => Auth::user()->id,
                'description' => $request->description,
            ];
        }

        Question::create($data);
        return redirect()->back();
    }

    public function addComment(Request $request)
    {
        // return $request->all();
        $data = [
            'comment' => $request->comment,
            'question_id' => $request->question_id,
            'user_id' => Auth::user()->id
        ];
        // dd($data);
        Comment::create($data);
        return back();
    }
}
