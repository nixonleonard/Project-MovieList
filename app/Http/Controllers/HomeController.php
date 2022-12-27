<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        return view('home');
    }

    // public function showHomeA(){
    //     return view('home');
    // }

    // public function showHomeU(){
    //     return view('home');
    // }

    public function getAllMovie()
    {
        $movie = movies::all();
        return view('home', compact('movie'));
    }
}
