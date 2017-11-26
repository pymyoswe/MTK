<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'name'=>'required|exists:users',
            'password'=>'required'
        ]);

        if(Auth::attempt(['name'=>$request['name'],'password'=>$request['password']])){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with(['msg'=>'Sorry login failed!']);
        }
    }

    public function signUp(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users',
            'password'=>'required|min:8',
            'password_confirm'=>'required|same:password'
        ]);

        $user=new User();
        $user->name=$request['name'];
        $user->password=bcrypt($request['password']);
        $user->save();

        return redirect()->back()->with(['msg'=>'Sign Up Success.']);
    }
}
