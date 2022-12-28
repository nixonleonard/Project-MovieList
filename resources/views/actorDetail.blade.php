@extends('layouts.layout')

@section('content')

<div class="box p-5">
    <div class="row text-light">
        <div class="col-3">
            <img src="{{asset($actor->image)}}" alt="">
            <h4 >Personal Info</h4>
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
            <p class="h2">{{$actor->name}}</p>
            <p>{{$bio}}</p>
            <p class="h4">Known for</p>
            <div class="card-group px-5">
                @foreach ($character as $m)
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
    </div>
</div>

@endsection
