<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    public function getAllActor(Request $request){
        $search = $request->query('search');
        $names = Actor::where('name', 'LIKE', "%$search%")->leftJoin('characters','characters.actor_id','=','actors.id')->leftJoin('movies','movies.id','=','characters.movie_id')->paginate(100)->appends(['search' => $search]);;
        return view('actor')->with(compact('names'));
    }
    // $movie = WatchList::with('movie')
    //         ->where('user_id', Auth::user()->id)
    //         ->where('title', 'LIKE', "%$request->search%")
    //         ->join('movies', 'movie_id', '=', 'movies.id')
    //         ->paginate(4);

    public function showActorDetail(Request $request){
        $id = $request->actor_id;
        $actor = Actor::where('name','=',$id)->first();
        // dd($actor);
        $character = DB::table('characters')->where('actor_id','=',$actor->id)->join('movies', 'characters.movie_id','=','movies.id')->get();
        // $movie = DB::table('movies')->where('movie_id','=',$id)->join('actors', 'characters.actor_id','=','actors.id')->get();
        return view('actorDetail')->with(compact('actor','character'));
    }

    public function deleteActor(Request $request){
        $id = $request->actor_id;
        Actor::where('id', '=', $id)->delete();
        return redirect('/actor');
    }

    public function insertForActorPage(){
        return view('createActor');
    }

    public function insertActor(Request $request){

        $name = $request->name;
        $gender = $request->gender;
        $biography = $request->biography;
        $dob = $request->dob;
        $pob = $request->pob;
        $image = $request->image;
        $popularity = $request->popularity;

        $this->validate($request, [
            'name' => 'required|min:3',
            'gender' => 'required',
            'biography' => 'required|min:10',
            'dob' => 'required',
            'pob' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'popularity' => 'required|numeric',
        ]);

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $path = public_path().'/storage/images' ;
        $file->move($path,$fileName);

        // Storage::putFileAs('/public/images', $image, $image->getClientOriginalName());
        Actor::create([
            'name' => $name,
            'gender' => $gender,
            'biography' => $biography,
            'DOB' => $dob,
            'POB' => $pob,
            'image' => 'storage/images/'.$image->getClientOriginalName(),
            'popularity' => $popularity,
        ]);

        return redirect('/actor');
    }

    public function showEditActors(Request $request){
        $id = $request->actor_id;
        $actor = Actor::where('id','=',$id)->first();
        return view('editActor')->with(compact('actor'));
    }

    public function editedActors(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $biography = $request->biography;
        $dob = $request->dob;
        $pob = $request->pob;
        $image = $request->file('image');
        $popularity = $request->popularity;

        $this->validate($request, [
            'name' => 'required|min:3',
            'gender' => 'required',
            'biography' => 'required|min:10',
            'dob' => 'required',
            'pob' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'popularity' => 'required|numeric',
        ]);

        // dd($request->actor_id);
        $actor = Actor::where('id', '=', $request->actor_id)->first();
        // dd($actor);

        $actor->name = $name;
        $actor->gender = $gender;
        $actor->biography = $biography;
        $actor->DOB = $dob;
        $actor->POB = $pob;
        $actor->popularity = $popularity;

        if($image!=null){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $path = public_path().'/storage/images' ;
            $file->move($path,$fileName);

            $actor->image = 'storage/images/actors/'.$image->getClientOriginalName();
        }

        $actor->save();

        return redirect('/actor');
    }
}
