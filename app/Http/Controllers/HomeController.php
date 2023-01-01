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
        // echo "hi";
        $movie = Movie::all();
        $genre = Genre::all();
        $search = $request->query('search');
        $titles = Movie::where('title', 'LIKE', "%$search%")->paginate(5)->appends(['search' => $search]);
        $randMovie = DB::table('movie_genres')->join('movies','movies.id','=','movie_genres.movie_id')->join('genres','movie_genres.genre_id','=','genres.id')->inRandomOrder()->limit(3)->get();
        // dd($randMovie);
        return view('home')->with(compact('movie','genre','titles','randMovie'));
    }

    public function getMoviesFromGenre(Request $request)
    {
        $movie = Movie::all();
        $genre = Genre::all();
        $genre_id = $request->genre_id;
        $titles = DB::table('movie_genres')->join('movies','movies.id','=','movie_genres.movie_id')->where('movie_genres.genre_id','=',$genre_id)->get();
        $randMovie = DB::table('movie_genres')->join('movies','movies.id','=','movie_genres.movie_id')->join('genres','movie_genres.genre_id','=','genres.id')->inRandomOrder()->limit(3)->get();

        $sortid = $request->id;

        if($sortid == 1){
            $titles = Movie::all()->sortBy('created_at');
        }elseif($sortid == 2){
            $titles = Movie::all()->sortBy('title');
        }else{
            $titles = Movie::all()->sortByDesc('title');
        }
        // dd($tit);

        return view('home')->with(compact('movie','genre', 'titles' ,'randMovie'));
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

        $this->validate($request, [
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:8',
            'genre' => 'required',
            'actor.*.id' => 'required',
            'character.*.cname' => 'required',
            'director' => 'required|min:3',
            'release_date' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png,gif',
            'background'=> 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $file_t = $request->file('thumbnail');
        $fileName = $file_t->getClientOriginalName();
        $path = public_path().'/storage/images' ;
        $file_t->move($path,$fileName);

        $file_bg = $request->file('background');
        $fileName = $file_bg->getClientOriginalName();
        $path = public_path().'/storage/images' ;
        $file_bg->move($path,$fileName);

        DB::transaction(function () use($request){
            $movie = Movie::create([
                'title' => $request->title,
                'description' => $request->description,
                'release_date' => $request->release_date,
                'director' => $request->director,
                'thumbnail' => 'storage/images/movies/'.$request->thumbnail->getClientOriginalName(),
                'background' => 'storage/images/movies/'.$request->background->getClientOriginalName(),
            ]);


            foreach ($request->genre as $g => $id){
                MovieGenre::create([
                    'movie_id' => $movie->id,
                    'genre_id' => $id,
                ]);
            }

            for ($i = 0; $i < count($request->actor); $i++) {
                echo (count($request->actor));
                echo "{{$request->actor[$i]['id']}}";
                dd(count($request->actor));
                Character::create([
                    'movie_id' => $movie->id,
                    'actor_id' => $request->actor[$i]['id'],
                    'cname' => $request->character[$i]['cname'],
                ]);
            }
            // dd($movie);
        });



        return redirect('/home');
    }
}
