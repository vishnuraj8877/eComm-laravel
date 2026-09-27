<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
class UserController extends Controller
{
    public function login(Request $request){
        // $user = User::where(['email'=>$request->email])->first();
        // if(!$user || !Hash::check($request->password,$user->password)){
        //     echo 'not match';
        // }else{
        //     print_r(auth()->user());exit;
        //     return redirect('/');
        // }
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->withSuccess('Login Successfull');
        }  
    }
}
