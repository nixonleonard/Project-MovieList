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

    public function deleteActor(Request $request){
        $id = $request->actor_id;
        Actor::where('id', '=', $id)->delete();
        return redirect('/home');
    }

    public function insertActorPage(){
        return view('createActor');
    }

    public function insertActor(Request $request){

        // dd($request);
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

        Storage::putFileAs('/public/storage/images', $image, $image->getClientOriginalName());
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
        // return view('test')->with(compact('productName', 'productCategory', 'productDetail', 'productPrice', 'productImage'));

        // DB::table('users')->insert($insert);
        // return redirect('/login');
    }
}
