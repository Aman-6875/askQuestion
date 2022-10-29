<?php

use App\Http\Controllers\AuthController;
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
});
