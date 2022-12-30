<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Character;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getMovieGenre(Request $request)
    {
        $movie = Movie::all();
        $genre = Genre::all();
        $search = $request->query('search');
        $titles = Movie::where('title', 'LIKE', "%$search%")->paginate(5)->appends(['search' => $search]);
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
        $mgenre = DB::table('movie_genres')->where('movie_id','=',$id)->join('genres', 'movie_genres.genre_id','=','genres.id')->get();
        $character = DB::table('characters')->where('movie_id','=',$id)->join('actors', 'characters.actor_id','=','actors.id')->get();
        return view('movieDetail')->with(compact('movie', 'nmovie','character','mgenre'));
    }

    public function deleteMovie(Request $request){
        $id = $request->movie_id;
        Movie::where('id', '=', $id)->delete();
        return redirect('/home');
    }

    public function insertForMovieGenre(){
        $genre = Genre::all();
        $actor = Actor::all();
        return view('createMovie')->with(compact('genre', 'actor'));
    }

    public function insertMovie(Request $request){

        // $title = $request->title;
        // $description = $request->description;
        // $genre = $request->genre;
        // $actor = $request->actor;
        // $character = $request->character;
        // $director = $request->director;
        // $release_date = $request->release_date;
        // $thumbnail = $request->thumbnail;
        // $background = $request->background;

        // $this->validate($request, [
        //     'name' => 'required|min:3',
        //     'gender' => 'required',
        //     'biography' => 'required|min:10',
        //     'dob' => 'required',
        //     'pob' => 'required',
        //     'image' => 'required|mimes:jpeg,jpg,png,gif',
        //     'popularity' => 'required|numeric',
        // ]);

        // $file = $request->file('image');
        // $fileName = $file->getClientOriginalName();
        // $path = public_path().'/storage/images' ;
        // $file->move($path,$fileName);

        // // Storage::putFileAs('/public/images', $image, $image->getClientOriginalName());
        // Movie::create([
        //     'name' => $name,
        //     'gender' => $gender,
        //     'biography' => $biography,
        //     'DOB' => $dob,
        //     'POB' => $pob,
        //     'image' => 'storage/images/'.$image->getClientOriginalName(),
        //     'popularity' => $popularity,
        // ]);

        // MovieGenre::create([

        // ])

        // return redirect('/actor');
    }
}
