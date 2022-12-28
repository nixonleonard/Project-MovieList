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
                <div class="position-absolute text-light" style="margin-left: 100px; margin-top:300px">
                    <div class="fs-8">judul film | judul film</div>
                    <b class="fs-1">judul film</b>
                    <p>judul film</p>
                </div>
                <img src="{{ url('storage/images/avangers.jpg') }}" class="d-block w-100" style="width: 1200px; height:602px" alt="" />
              </div>
              <div class="carousel-item">
                <div class="position-absolute text-light fs-5">
                    <p>judul film</p>
                </div >
                <img src="{{ url('storage/images/avatar.jpg') }}" class="d-block w-100" style="width: 1200px; height:602px" alt="...">
              </div >
              <div class="carousel-item">
                <div class="position-absolute text-light fs-5">
                    <p>judul film</p>
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

        <div class="text-light">
            <i class="fas fa-film" style="color:white"></i>
            <b>Show</b>

            <form action="/home" class="d-flex justify-content-end">
                <input type="text" placeholder="Search movie..." id = "search" name = "search">
                <button type="submit">Search</button>
            </form>
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
                <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">Latest</button>
                <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">A-Z</button>
                <button type="button" class="btn btn-secondary rounded-pill mx-2 px-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">Z-A</button>
            </div>
            @auth
            @if (Auth::user()->is_admin == 'admin')
            <div class=" d-flex justify-content-end" style="padding-right: 2rem">
                <button type="button" class="btn btn-danger">+ Add Movie</button>
            </div>
            @endif
            @endauth
            <div class="card-group px-5" style="padding-top: 2rem">
                @foreach ($titles as $t)
                    <div class="col">
                        <div class="card text-white bg-transparent mb-3" style="width: 15rem;">
                            <img src="{{asset($t->thumbnail)}}" class="card-img-top" style = "height:20rem;" alt="...">
                            <div class="card-body px-4" style="height: 5rem;">
                            <h6 style="height: 1rem;">{{$t->title}} </h6>
                            <p class="text-muted" style="height: 2rem;">{{date('Y', strtotime($t->release_date))}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>

    </div>

@endsection
