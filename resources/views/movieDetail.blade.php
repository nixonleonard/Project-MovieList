@extends('layouts.layout')

@section('content')

<img src="{{asset($movie->thumbnail)}}" alt="">
{{$movie->title}}


<div class="box p-5 text-light">
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">Cast</p>

        @foreach ($character as $c)
            <img src="{{asset($c->image)}}" alt="">
            {{$c->name}}
            {{$c->cname}}
        @endforeach

        <br>
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">More</p>
        <div class="card-group px-5">
            @foreach ($nmovie as $m)
                <div class="col">
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
