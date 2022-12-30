<?php

namespace App\Http\Controllers;

use App\Models\User;
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

            return redirect('/home');
        }

        if(!Auth::attempt($credentials, $request->remember_me)){
            return redirect()->back()->withErrors(new MessageBag(['Email or Password is incorrect']));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function myProfilePage(){
        $user = Auth::user();
        return view('profilePage')->with(compact('user'));
    }

    public function updateProfile(Request $request){

        $username = $request->username;
        $email = $request->email;
        $dob = $request->dob;
        $phone = $request->phone;

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required|min:5|max:13',
        ]);

        $user = Auth::user();

        $user->username = $username;
        $user->email = $email;
        $user->DOB = $dob;
        $user->phone = $phone;

        $user->save();

        return redirect('/myprofile');
    }

    public function updateProfilePict(Request $request){

        $request->validate([
            'image' => 'required',
        ]);

        $user = Auth::user();
        $user->image = $request->image;
        $user->save();

        return redirect('/myprofile');
    }
}
