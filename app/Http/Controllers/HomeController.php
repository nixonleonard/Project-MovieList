<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
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

    public function getMovieGenre()
    {
        $movie = Movie::all();
        $genre = Genre::all();
        return view('home',["movie"=>$movie, "genre"=>$genre]);
    }

    public function getAllGenre()
    {
        $genre = MovieGenre::all();
        return view('home',["name"=>$genre]);
    }
}
