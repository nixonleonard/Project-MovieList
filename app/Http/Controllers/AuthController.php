<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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
                Cookie::queue('mycookie', $request->email, 5);
            }
            Session::put('mysession', $credentials);

            // if($request->is_admin == 'admin'){
            //     return redirect('/admin');
            // }else{
            return redirect()->back();
            // }
        }

        return 'fail';
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function adminPage(){
        return view('home_admin');
    }
}
