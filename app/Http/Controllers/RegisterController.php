<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(Request $request){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $confirm_password = $request->confirm_password;

        $this->validate($request, [
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
        ]);

        $insert = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];

        DB::table('users')->insert($insert);
        return redirect('/login');
    }
}
