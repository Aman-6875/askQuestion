<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/sign-in', [AuthController::class, 'loginForm'])->name('sign-in');
Route::get('/sign-up', [AuthController::class, 'registerForm']);

Route::get('/', [FrontendController::class, 'index']);
Route::post('/post-register', [AuthController::class, 'postRegister'])->name('auth.signup');
Route::get('/question-details/{id}', [FrontendController::class, 'singleQuestion'])->name('question.details');
Route::get('/category-questions/{id}', [FrontendController::class, 'categoryQuestions'])->name('category.questions');
Route::post('/post-login', [AuthController::class, 'authenticate'])->name('auth.signin');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/add-comment', [FrontendController::class, 'addComment']);
    Route::get('/like-question/{question_id}', [FrontendController::class, 'likeQuestion']);
    Route::get('/like-comment/{comment_id}', [FrontendController::class, 'likeComment']);
    Route::get('/best-comment/{comment_id}', [FrontendController::class, 'bestComment']);
    Route::get('/edit-profile', [FrontendController::class, 'editProfile']);
    Route::get('/user-profile', [FrontendController::class, 'userProfile']);
    Route::post('/update-profile', [FrontendController::class, 'updateUserProfile']);
    Route::get('/ask-question', [FrontendController::class, 'questionForm']);
    Route::post('/store-question', [FrontendController::class, 'storeQuestion']);

    //User Profile Section
    Route::get('/user-posts', [FrontendController::class, 'userPosts'])->name('user.posts');
    Route::get('/question-edit/{id}', [FrontendController::class, 'questionEdit'])->name('question.edit');
    Route::post('/question-edit/{id}', [FrontendController::class, 'questionUpdate'])->name('question.update');
    Route::get('/question-delete/{id}', [FrontendController::class, 'questionDelete'])->name('question.delete');
    Route::get('/question-best-answer/{cid}/{qid}', [FrontendController::class, 'questionBestAnswer'])->name('question_best.answer');
    Route::get('/question-helpful/{cid}/{qid}', [FrontendController::class, 'questionHelpful'])->name('question.helpful');
    Route::get('/question-too/{qid}', [FrontendController::class, 'questionToo'])->name('question.too');

    //admin panel
    Route::get('admin-dashboard', [AdminController::class, 'index']);
    Route::resource('category', CategoryController::class);
    Route::get('category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('all-comments', [AdminController::class, 'allComments'])->name('comments.index');
    Route::get('all-questions', [AdminController::class, 'allQuestions'])->name('questions.index');
    Route::get('delete-question/{id}', [AdminController::class, 'deleteQuestion'])->name('question.delete');
    Route::get('delete-comment/{id}', [AdminController::class, 'deleteComment'])->name('comment.delete');
    Route::get('all-users', [AdminController::class, 'allUsers'])->name('users.index');
    Route::get('delete-user/{id}', [AdminController::class, 'deleteUser'])->name('user.delete');
});
