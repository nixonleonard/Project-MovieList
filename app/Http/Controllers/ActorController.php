<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function getAllActor(Request $request){
        // $id = $request->actor_id;
        $search = $request->query('search');
        $titles = Actor::where('name', 'LIKE', "%$search%")->paginate(5)->appends(['search' => $search]);
        $actor = DB::table('actors')->join('characters','characters.actor_id','=','actors.id')->join('movies','movies.id','=','characters.movie_id')->get();
        return view('actor')->with(compact('actor', 'titles'));
    }

    public function showActorDetail(Request $request){
        $id = $request->actor_id;
        $actor = Actor::where('name','=',$id)->first();
        // dd($actor);
        $character = DB::table('characters')->where('actor_id','=',$actor->id)->join('movies', 'characters.movie_id','=','movies.id')->get();
        // $movie = DB::table('movies')->where('movie_id','=',$id)->join('actors', 'characters.actor_id','=','actors.id')->get();
        $bio = file_get_contents($actor->biography);
        return view('actorDetail')->with(compact('actor','character','bio'));
    }


    // $id = $request->route('book_id');
    // $book = DB::table('books')->where('id','=',$id)->first();
    // $publisher = DB::table('publishers')->where('id','=',$book->publisher_id)->first();
    // $synopsis = file_get_contents($book->synopsis);
    // return view('book_detail')->with(compact('book','publisher','synopsis'));
}
