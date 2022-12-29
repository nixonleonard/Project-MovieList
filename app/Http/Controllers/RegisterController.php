<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
            'password' => 'required|min:6|alpha_num',
            'confirm_password' => 'required_with:password|same:password|min:6|alpha_num',
        ]);

        $hasedPass = Hash::make($password);

        $insert = [
            'username' => $username,
            'email' => $email,
            'password' => $hasedPass,
            "created_at" => Carbon::now(), # new \Datetime()
            "updated_at" => Carbon::now(),  # new \Datetime()
        ];

        DB::table('users')->insert($insert);
        return redirect('/login');
    }

    public function showGenre(){
        $genre = Genre::all();
        return view('createMovie')->with(compact('genre'));
    }
}
