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
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6',
            'password' => 'required|min:6'
        ]);

        // $data = $request->all();
        // $check = $this->create($data);

        // return redirect("dashboard")->withSuccess('You have signed-in');
        // $extension = $request->image->getClientOriginalExtension();
        // $fileName = $request->name . '.' . $extension;
        // $request->image->move('images', $fileName);

        // $concert = new concert();
        // $concert->organizer_id = $request->organizer_id;
        // $concert->image = $fileName;
        // $concert->name = $request->name;
        // $concert->description = $request->description;
        // $concert->date = $request->date;
        // $concert->startTime = $request->startTime;
        // $concert->endTime = $request->endTime;
        // $concert->save();
        return redirect('/home');
    }
}
