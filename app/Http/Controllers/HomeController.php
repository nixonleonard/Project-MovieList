<?php

namespace App\Http\Controllers;

use App\Models\Character;
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

    public function getMovieGenre(Request $request)
    {
        $movie = Movie::all();
        $genre = Genre::all();
        $search = $request->query('search');
        $titles = Movie::where('title', 'LIKE', "%$search%")->paginate(3)->appends(['search' => $search]);
        return view('home')->with(compact('movie','genre', 'titles'));
    }

    public function getMoviesFromGenre(Request $request)
    {
        $movie = Movie::all();
        $genre = Genre::all();
        $genre_id = $request->genre_id;
        $titles = DB::table('movie_genres')->join('movies','movies.id','=','movie_genres.movie_id')->where('movie_genres.genre_id','=',$genre_id)->get();
        return view('home')->with(compact('movie','genre', 'titles'));
    }

    public function showMovieDetail(Request $request){
        $id = $request->movie_id;
        $movie = Movie::where('id','=',$id)->first();
        $nmovie = Movie::where('id','!=',$id)->get();
        $character = DB::table('characters')->where('movie_id','=',$id)->join('actors', 'characters.actor_id','=','actors.id')->get();
        return view('movieDetail')->with(compact('movie', 'nmovie','character'));
    }


}
