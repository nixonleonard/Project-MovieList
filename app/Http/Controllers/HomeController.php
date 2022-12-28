<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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
        $movie = Movie::all();
        return view('home',["movie"=>$movie]);
    }
}
