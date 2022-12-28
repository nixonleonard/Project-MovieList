@extends('layouts.layout')

@section('content')

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
        <div class="text-light">
            <i class="fas fa-fire-alt" style="color:white"></i>
            <b>Popular</b>
            <hr>
            @foreach ($movie as $m)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset($m->thumbnail)}}" class="card-img-top" style = "height:30rem;" alt="...">
                        <div class="card-body" style="height: 15rem;">
                        <h5 class="card-title" style="height: 5rem;">{{$m->title}} </h5>
                        <h5 class="card-title" style="height: 2rem;">{{date('Y', strtotime($m->release_date))}} </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-light ">
            <i class="fas fa-film" style="color:white"></i>
            <b>Show</b>
            <hr>
            {{-- @foreach ( as )

            @endforeach --}}
            <div class="d-flex justify-content-around" >
                <button type="button" class="btn btn-secondary rounded-pill" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: .75rem;">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
            </div>
            <br>
            <div>
                <p>Sort by</p>
                <button type="button" class="btn btn-secondary rounded-pill" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Secondary</button>
                <button type="button" class="btn btn-secondary rounded-pill" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Secondary</button>
            </div>

            @auth

                @if (Auth::user()->is_admin == 'admin')
                <div class=" d-flex justify-content-end" style="padding-right: 2rem">
                    <button type="button" class="btn btn-danger">+ Add Movie</button>
                </div>
                @endif

                     {{-- content --}}
            @endauth



        </div>

    </div>

@endsection
