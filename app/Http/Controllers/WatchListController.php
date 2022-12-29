<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\WatchList;
use Illuminate\Http\Request;

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

        $selected = $request->status;
        $movies->appends([
            'title'=>$request->search,
        ]);
        return view('myWatchList', ['movies'=>$movies, 'selected'=>$selected]);
    }
}
