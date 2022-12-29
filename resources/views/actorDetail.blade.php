@extends('layouts.layout')

@section('content')

<style>

</style>

<div class="box p-5">
    <div class="row text-light">
        <div class="col-3">

            <img src="{{asset($actor->image)}}" alt="" style="height: 400px;">

            <h4 style="padding-top: 10px">Personal Info</h4>
            <h6 class="font-weight-bold">Popularity</h6>
            <p class="text-muted">{{$actor->popularity}}</p>

            <h6 class="font-weight-bold">Gender</h6>
            <p class="text-muted">{{$actor->gender}}</p>

            <h6 class="font-weight-bold">Birthday</h6>
            <p class="text-muted">{{$actor->DOB}}</p>

            <h6 class="font-weight-bold">Place of Birth</h6>
            <p class="text-muted">{{$actor->POB}}</p>
        </div>
        <div class="col-8">
            <div class="row g-0">
                <div class="col">
                    <p class="h2">{{$actor->name}}</p>
                </div>
                @auth
                @if (Auth::user()->is_admin == 'admin')
                <div class="col d-flex justify-content-end" style="padding-right: 2rem;">
                    <a href="/editactor/{{$actor->id}}"><i class="bi bi-pencil-square" style="color: white; padding-right: 7px"></i></a>
                    <a href="/deleteactor/{{$actor->id}}"><i class="bi bi-trash3" style="color: white"></i></i></a>
                </div>
                @endif
                @endauth
            </div>

            <p>{{$bio}}</p>
            <p class="h4">Known for</p>
            <div class="card-group px-5">
                @foreach ($character as $m)
                    <div class="col-auto px-3">
                        <div class="card text-white bg-transparent mb-3" style="width: 15rem;">
                            <a href="/moviedetail/{{$m->id}}"><img src="{{asset($m->thumbnail)}}" class="card-img-top" style = "height:20rem;" alt="..."></a>
                            <div class="card-body px-4" style="height: 5rem;">
                            <h6 style="height: 1rem;">{{$m->title}} </h6>
                            <p class="text-muted" style="height: 2rem;">{{date('Y', strtotime($m->release_date))}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
