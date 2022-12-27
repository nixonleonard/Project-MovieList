<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($credentials, true)){
            if($request->remember){
                Cookie::queue('mycookie', $request->email, 120);
            }
            Session::put('mysession', $credentials);

            return view('home');
        }

        if(!Auth::attempt($credentials, $request->remember_me)){
            return redirect()->back()->withErrors(new MessageBag(['Email or Password is incorrect']));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
