<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use App\Models\WatchList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchListController extends Controller
{
    public function search(Request $request){
        if($request->search){
            $movie = WatchList::with('movie')
            ->where('user_id', Auth::user()->id)
            ->where('title', 'LIKE', "%$request->search%")
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->paginate(4);
        }else if($request->status){
            if($request->status=='all') $request->status='';
            $movie = WatchList::with('movie')
            ->where('user_id', Auth::user()->id)
            ->where('status', 'LIKE', "%$request->search%")
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->paginate(4);
        }else{
            $movies = WatchList::where('user_id', Auth::user()->id)->paginate(4);
        }
        $movie = DB::table('movies')->join('watch_lists','movies.id','=','watch_lists.movie_id')->get();
        $selected = $request->status;
        $movies->appends([
            'title'=>$request->search,
        ]);
        return view('myWatchList')->with(compact('movies', 'selected', 'movie'));
    }

    public function addToWatchList(Request $request){
        WatchList::create([
            'user_id' => Auth::user()->id,
            'movie_id' => $request->movie_id,
            'status' => 'Planning'
        ]);
        $movie = DB::table('movies')->join('watch_lists','movies.id','=','watch_lists.movie_id')->get();
        return view('myWatchList')->with(compact('movie'));
    }

}
