<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user,username|min:5|max:50',
            'email' => 'required|email|unique:user,email',
            // 'password' => 'required|min:5',
            // 'confirm_password' => 'required'
        ]);
        $extension = $req->image->getClientOriginalExtension();
        $fileName = $req->name . '.' . $extension;
        $request->image->move('images', $fileName);

        $concert = new concert();
        $concert->organizer_id = $req->organizer_id;
        $concert->image = $fileName;
        $concert->name = $req->name;
        $concert->description = $req->description;
        $concert->date = $req->date;
        $concert->startTime = $req->startTime;
        $concert->endTime = $req->endTime;
        $concert->save();
        return redirect('/home');
    }
}
