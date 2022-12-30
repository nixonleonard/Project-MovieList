@extends('layouts.layout')

@section('content')
<style>

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}
</style>

    <div class="box">
        <div id="carouselExampleIndicators" class="carousel slide" style="background-image: linear-gradient(to right,black,black 0%,black 0%)" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="position-absolute text-light container" style="margin-left: 100px; margin-top:300px">
                    <div class="fs-8">Action Adventure Drama | 2019</div>
                    <b class="fs-1">Avengers : Endgame</b>
                    <div class="card bg-transparent" style="width: 35rem; border:none;">
                        <p class="col">After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face...</p>
                    </div>
                    @auth
                    @if (Auth::user()->is_admin == 'member')
                    <div class=" d-flex justify-content-start" style="padding-right: 2rem">
                        <form action="/addtowatchlist/1" method="post" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-danger">+ Add to WatchList</button>
                        </form>
                    </div>
                    @endif
                    @endauth
                </div>
                <img src="{{ url('storage/images/avangers.jpg') }}" class="d-block w-100" style="width: 1200px; height:602px" alt="" />
              </div>
              <div class="carousel-item">
                <div class="position-absolute text-light container" style="margin-left: 100px; margin-top:300px">
                    <div class="fs-8">Action Adventure Fantasy | 2009</div>
                    <b class="fs-1">Avatar</b>
                    <div class="card bg-transparent" style="width: 35rem; border:none;">
                        <p class="col">When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge's intentions of driving off the native humanoid "Na'vi" in order to mine for the precious material scattered throughout their rich woodland.</p>
                    </div>
                    @auth
                    @if (Auth::user()->is_admin == 'member')
                    <div class=" d-flex justify-content-start" style="padding-right: 2rem">
                        <form action="/addtowatchlist/2" method="post" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-danger">+ Add to WatchList</button>
                        </form>
                    </div>
                    @endif
                    @endauth
                </div >
                <img src="{{ url('storage/images/avatar.jpg') }}" class="d-block w-100" style="width: 1200px; height:602px" alt="...">
              </div >
              <div class="carousel-item">
                <div class="position-absolute text-light container" style="margin-left: 100px; margin-top:300px">
                    <div class="fs-8">Animation Adventure Comedy Family Musical | 2009</div>
                    <b class="fs-1">Sing 2</b>
                    <div class="card bg-transparent" style="width: 35rem; border:none;">
                        <p class="col">With his theatrical company a local success, Buster Moon is dreaming of bigger things. Unfortunately, when a talent scout dismisses their work as inadequate for the big time, Buster is driven to prove her wrong. With that goal in mind, Buster inspires his players to gamble everything to sneak into a talent audition in Redshore City for the demanding entertainment mogul Jimmy Crystal.</p>
                    </div>
                    @auth
                    @if (Auth::user()->is_admin == 'member')
                    <div class=" d-flex justify-content-start" style="padding-right: 2rem">
                        <form action="/addtowatchlist/3" method="post" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-danger">+ Add to WatchList</button>
                        </form>
                    </div>
                    @endif
                    @endauth
                </div>
                <img src="{{ url('storage/images/sing.jpg') }}" class="d-block w-100" style="width: 1200px; height:602px" alt="...">
              </div>
            </div>
        </div>
        <div class="text-light p-3">
            <i class="fas fa-fire-alt" style="color:white"></i>
            <b class="p4">Popular</b>
            <hr>
            <div class="card-group px-5">
                @foreach ($movie as $m)
                    <div class="col">
                        <div class="card text-white bg-transparent mb-3" style="width: 15rem; border:none;">
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

        <div class="text-light">
            <div>
                <form action="/home" class="d-flex justify-content-end">
                    <div class="input-group rounded d-flex justify-content-end" style="width: 300px; height: 30px" >
                        <input type="search" name="search" id="search" class="form-control rounded bg-dark text-light border border-dark" placeholder="Search movie..." aria-label="Search"/>
                        <button type="submit">Search</button>
                    </div>
                </form>
                <div class="">
                    <i class="fas fa-film" style="color:white"></i>
                    <b>Show</b>
                </div>
                <div>
                </div>
            </div>
                <hr>

            <div class="d-flex flex-wrap">

            @foreach ($genre as $g)
                <a href="/genre/{{$g->id}}">
                    <button type="button" class="btn btn-secondary rounded-pill m-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: .75rem;">{{$g->name}}</button>
                </a>
            @endforeach

            </div>
            <br>
            <div class="d-flex flex-wrap">
                <h6 style="padding-right: 20px">Sort by</h6>
                <a href="/sort/1">
                    <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">Latest</button>
                </a>
                <a href="/sort/2">
                    <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">A-Z</button>
                </a>
                <a href="/sort/3">
                    <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">Z-A</button>
                </a>
            </div>

            @auth
            @if (Auth::user()->is_admin == 'admin')
            <div class=" d-flex justify-content-end" style="padding-right: 2rem">
                <a href="/createmovie"><button type="button" class="btn btn-danger">+ Add Movie</button></a>
            </div>
            @endif
            @endauth

            <div class="card-group px-5" style="padding-top: 2rem">
                @foreach ($titles as $t)
                    <div class="col-auto px-3">
                        <div class="card text-white bg-transparent mb-3" style="width: 15rem;">
                            <a href="/moviedetail/{{$t->id}}"><img src="{{asset($t->thumbnail)}}" class="card-img-top" style = "height:20rem;" alt="..."></a>
                            <div class="card-body px-4" style="height: 5rem;">
                            {{-- <h6 style="height: 1rem;">{{$t->title}} </h6>
                            <p class="text-muted" style="height: 2rem;">{{date('Y', strtotime($t->release_date))}} </p> --}}
                            @if (Auth::user()->is_admin == 'member')
                            <h6 style="height: 1rem;">{{$t->title}} </h6>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted" style="height: 2rem;">{{date('Y', strtotime($t->release_date))}} </p>
                                <form action="/addtowatchlist/{{$t->id}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn text-muted">
                                          +
                                    </button>
                                </form>
                            </div>
                            @endif
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            {{-- @if (Auth::user()->is_admin == 'member')
                <button class="border-0 btn py-3 bg-danger text-white watchlist fa-solid
                @php
                    $check=false
                @endphp
                @foreach ($ as )

                @endforeach">

                </button>
            @endif --}}


        </div>

    </div>

@endsection
