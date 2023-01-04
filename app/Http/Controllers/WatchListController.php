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
            $movie = WatchList::where('user_id', Auth::user()->id)->leftJoin('movies', 'watch_lists.movie_id', '=', 'movies.id')->paginate(4);
        }
        return view('myWatchList')->with(compact('movie'));
    }

    public function addToWatchList(Request $request){
        $ids = $request->movie_id;
        $valid = WatchList::where('movie_id','=',$ids)->get();
        // dd($valid);
        if(count($valid)!=0){
            $movie = DB::table('watch_lists')->join('movies','movies.id','=','watch_lists.movie_id')->get();
        }else{
            WatchList::create([
                'user_id' => Auth::user()->id,
                'movie_id' => $request->movie_id,
                'status' => 'Planning'
            ]);
            $movie = DB::table('watch_lists')->join('movies','movies.id','=','watch_lists.movie_id')->get();
        }
        return view('myWatchList')->with(compact('movie'));
    }

    public function changeStatus(Request $request, $wl_id){
        $id = $request->id;
        $uid = Auth::user()->id;

        if($request->status == 'planned'){
            $change = 'Planning';
            WatchList::where('id_wl','=',$wl_id)->where('user_id','=',Auth::user()->id)->update(['status' => $change]);
        }elseif($request->status == 'watching'){
            $change = 'Watching';
            WatchList::where('id_wl','=',$wl_id)->where('user_id','=',Auth::user()->id)->update(['status' => $change]);
        }elseif($request->status == 'finished'){
            $change = 'Finished';
            WatchList::where('id_wl','=',$wl_id)->where('user_id','=',Auth::user()->id)->update(['status' => $change]);
        }else{
            WatchList::where('id_wl','=',$wl_id)->where('user_id','=',Auth::user()->id)->delete();
        }

        $movie = DB::table('movies')->join('watch_lists','movies.id','=','watch_lists.movie_id')->get();

        return view('myWatchList')->with(compact('movie'));
    }

}
