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
        // dd($request->status);
        $search = $request->query('search');
        // $titles = Movie::where('title', 'LIKE', "%$search%")->paginate(5)->appends(['search' => $search]);
        if($search){
            $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->where('title', 'LIKE', "%$request->search%")->join('movies', 'movie_id', '=', 'movies.id')->paginate(4)->appends(['search' => $search]);
            // $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->where('title', 'LIKE', "%$request->search%")->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
        }else if($request->status){
            if($request->status=='filter'){
                $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);// $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->where('status', '=', 'Planning')->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
            }elseif($request->status=='all'){
                $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
                // $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
            }elseif($request->status=='planned'){
                $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->where('status', '=', 'Planning')->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
                // $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->where('status', '=', 'Planning')->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
            }elseif($request->status=='watching'){
                $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->where('status', '=', 'Watching')->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
                // $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->where('status', '=', 'Watching')->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
            }elseif($request->status=='finished'){
                $movie = DB::table('watch_lists')->where('user_id', Auth::user()->id)->where('status', '=', 'Finished')->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
                // $movie = WatchList::with('movies')->where('user_id', Auth::user()->id)->where('status', '=', 'Finished')->join('movies', 'movie_id', '=', 'movies.id')->paginate(4);
            }
        }else{
            $movie = WatchList::where('user_id', Auth::user()->id)->join('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
        }
        return view('myWatchList')->with(compact('movie'));
    }

    public function addToWatchList(Request $request){
        WatchList::create([
            'user_id' => Auth::user()->id,
            'movie_id' => $request->movie_id,
            'status' => 'Planning'
        ]);
        $movie = DB::table('movies')->join('watch_lists','movies.id','=','watch_lists.movie_id')->get();
        // dd($movie);
        return view('myWatchList')->with(compact('movie'));
    }

    public function changeStatus(Request $request){
        $id = $request->movie_id;
        $uid = Auth::user()->id;
        WatchList::where('movie_id','=',$id)->delete();

        if($request->status == 'planned'){
            $change = 'Planning';
            WatchList::create([
                'user_id' => $uid,
                'movie_id' => $id,
                'status' => $change
            ]);
        }elseif($request->status == 'watching'){
            $change = 'Watching';
            WatchList::create([
                'user_id' => $uid,
                'movie_id' => $id,
                'status' => $change
            ]);
        }elseif($request->status == 'finished'){
            $change = 'Finished';
            WatchList::create([
                'user_id' => $uid,
                'movie_id' => $id,
                'status' => $change
            ]);
        }

        $movie = DB::table('movies')->join('watch_lists','movies.id','=','watch_lists.movie_id')->get();

        return view('myWatchList')->with(compact('movie'));
    }

}
