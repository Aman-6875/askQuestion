<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentHelpfulInfo;
use App\Models\Question;
use App\Models\QuestionTooInfo;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function index()
    {
        // dd(11);
        $post_count = Question::count();
        $cat_count = Category::count();
        $user_count = User::count();
        $popular_topics = Question::take(4)->latest()->get();
        
        $data['post_count'] = $post_count;
        $data['cat_count'] = $cat_count;
        $data['user_count'] = $user_count;
        $data['popular_topics'] = $popular_topics;
         
        $questions = Question::orderBy('created_at', 'desc')->paginate(20);
        return view('frontend.pages.home',compact('data'))->with('questions', $questions);
    }

    public function singleQuestion($id)
    {
        $question = Question::where('id', $id)->with('comments')->first();
        $best_comment_doesnt_exist = Comment::where('question_id', $question->id)->where('is_accept', 1)->doesntExist();
        $accepted_solution = Comment::where('question_id', $question->id)->where('is_accept', 1)->first();
        $question_too_count = QuestionTooInfo::where('question_id', $id)->count();
        return view('frontend.pages.question_details', compact('best_comment_doesnt_exist', 'accepted_solution', 'question_too_count'))->with('question', $question);
    }
    public function questionForm()
    {
        return view('frontend.pages.ask_question');
    }
    public function userProfile()
    {
        $user_id = Auth::user()->id;
        $questions_count = Question::where('user_id', $user_id)->count();
        return view('frontend.pages.user_profile', compact('questions_count'));
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
        //he;;p
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
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
                UserMeta::create($request->except(['name', 'email', 'file']));
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
            $image_name = time() . '.' . 'file' . $image->getClientOriginalName();
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



    public function userPosts()
    {
        $user_id = Auth::user()->id;
        $questions = Question::where('user_id', $user_id)->get();
        return view('frontend.pages.user_posts', compact('questions'));
    }



    public function questionEdit($id)
    {

        $question = Question::findOrFail($id);

        if ($question) {
            return view('frontend.pages.edit_question', compact('question'));
        }
    }

    public function questionUpdate(Request $request, $id)
    {


        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $image_name = time() . '.' . 'file' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/questions/');
            $image->move($destinationPath, $image_name);
            $request['image'] = "/images/questions/" . $image_name;
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

        Question::where('id', $id)->update($data);
        return redirect()->back();
    }




    public function questionDelete($id)
    {

        $question = Question::findOrFail($id);

        if ($question) {
            $question->delete();
            return redirect()->back();
        }
    }



    public function questionBestAnswer($cid, $qid)
    {

        $best_comment_doesnt_exist = Comment::where('question_id', $qid)->where('is_accept', 1)->doesntExist();

        if ($best_comment_doesnt_exist) {
            $comment = Comment::findOrFail($cid)->first();
            $comment->update(['is_accept' => 1]);
            User::where('id', $comment->user_id)->increment('points', 5);
            return redirect()->back();
        } else {
        }
    }


    public function questionHelpful($cid, $qid)
    {

        $checking_exist_helpful = CommentHelpfulInfo::where('comment_id', $cid)->where('question_id', $qid)->exists();
        if ($checking_exist_helpful == false) {

            CommentHelpfulInfo::create([
                'user_id' => Auth::user()->id,
                'question_id' => $qid,
                'comment_id' => $cid,
            ]);
            User::where('id', Auth::user()->id)->increment('points');
            return redirect()->back();
        } else {
            return redirect()->back()->with('message', 'you already voted as helpful');
        }
    }


    public function questionToo($qid)
    {

        $checking_exist_too = QuestionTooInfo::where('question_id', $qid)->where('user_id', Auth::user()->id)->exists();

        if ($checking_exist_too == false) {

            QuestionTooInfo::create([
                'user_id' => Auth::user()->id,
                'question_id' => $qid
            ]);

            $question_user_id = Question::where('id', $qid)->pluck('user_id')->first();
            User::where('id', $question_user_id)->increment('points', 2);
            return redirect()->back();
        } else {
            return redirect()->back()->with('message', 'you already voted');
        }
    }
}
