<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getMoviesFromGenre(Request $request)
    {
        $genre_id = $request->route('name');
        $movie = DB::table('movie_genres')->join('movies','movies.id','=','movie_genres.movie_id')->where('movie_genres.genre_id','=',$genre_id)->get();
        $genre = DB::table('genres')->where('name','=',$genre_id)->first();
        return view('home')->with(compact('movie','genre'));
    }
}
