@extends('layouts.layout')

@section('content')

<div class ="bg-image" style="background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('/storage/images/endgame/endgame_tn.jpg'); height: 500px; background-repeat: no-repeat; background-size: cover">
      <div class="card bg-transparent mb-3" style="max-width: auto; border:none;">
        <div class="row g-0" style="padding-top: 3rem;">
          <div class="col-md-4 d-flex justify-content-center">
            <img src="{{asset($movie->thumbnail)}}" style="height: 25rem; object-fit: cover;" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body text-light" style="padding-right: 10rem;">
                <div class="row g-0">
                    <div class="col">
                        <h2 class="card-title">{{$movie->title}}</h2>
                    </div>
                    @auth
                    @if (Auth::user()->is_admin == 'admin')
                    <div class="col d-flex justify-content-end" style="padding-right: 2rem;">
                        <a href="/editmovie"><i class="bi bi-pencil-square" style="color: white; padding-right: 7px"></i></a>
                        <a href="/deletemovie/{{$movie->id}}"><i class="bi bi-trash3" style="color: white"></i></i></a>
                    </div>
                    @endif
                    @endauth
                </div>

                @foreach ($mgenre as $mg)
                    <button type="button" class="btn btn-outline-light m-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: .75rem;">{{$mg->name}}</button>
                @endforeach
                <br>
                <i class="bi bi-calendar-event"></i>
                <h5 class="card-text">Release Year</h5>
                <p>{{date('Y', strtotime($movie->release_date))}}</p>
                <h5>Storyline</h5>
                <p class="card-text">{{$description}}</p>
                <h5>{{$movie->director}}</h5>
                <p class="card-text">Director</p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="box p-5 text-light">
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">Cast</p>

        <div class="card-group px-5">
            @foreach ($character as $c)
                <div class="col-auto px-3">
                    <div class="card text-white bg-danger mb-3" style="width: 15rem; border:none;">
                        <a href="/actordetail/{{$c->name}}"><img src="{{asset($c->image)}}" class="card-img-top" style = "height:20rem;" alt="..."></a>
                        <div class="card-body px-4" style="height: 7rem;">
                        <h6 style="height: 1rem;">{{$c->name}} </h6>
                        <p style="height: 2rem;">{{$c->cname}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- @foreach ($character as $c)
        <a href="/actordetail/{{$c->name}}"><img src="{{asset($c->image)}}" class="card-img-top" style = "height:20rem;" alt="..."></a>
            {{$c->name}}
            {{$c->cname}}
        @endforeach --}}

        <br>
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">More</p>
        <div class="card-group px-5">
            @foreach ($nmovie as $m)
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

@endsection
