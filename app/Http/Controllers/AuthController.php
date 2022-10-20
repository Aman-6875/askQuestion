<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm(){
        return view('frontend.pages.login');
    }
    public function registerForm(){
        return view('frontend.pages.register');
    }
    public function postRegister(Request $request){
    //    return $request->all();
       $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
       ];
       $user = User::create($data);
       auth()->login($user);
       return redirect('/')->with('success', "Account successfully registered.");
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->to('/');
        }else{
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
       
    }
}
