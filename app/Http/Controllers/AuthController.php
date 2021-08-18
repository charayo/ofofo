<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function accountProcess(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
            'username'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
       $user = User::create([
           'email'=>$request->email,
           'name'=>$request->username,
           'password'=>Hash::make($request->password)
       ]);
       
       return redirect()->back();
    }
    public function loginRequest(Request $userDetails){
        $userDetails->validate([
            'user_access'=>'required',
            'password'=>'required',
        ]);
        $email = $userDetails->user_access;
        $password = $userDetails->password;
        if(Auth::attempt(['email' => $email, 'password' => $password], )){
            return redirect()->to('/');
        }else{
            echo 'incorrect login details';
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    
}
