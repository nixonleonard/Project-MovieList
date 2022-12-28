@extends('layouts.layout')

@section('content')

<div class="box p-5">
    <div class="d-flex justify-content-between" style="padding-right: 2rem">
        <p class="text-danger h3 pb-5">Actors</p>
        <div class="input-group rounded " style="width: 200px; height: 30px" >
            <input type="search" class="form-control rounded bg-dark text-light border border-dark" placeholder="Search" aria-label="Search"/>
        </div>

    </div>
    {{-- @foreach ( as ) --}}
    <div class="card bg-dark text-light" style="width: 10rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    {{-- @endforeach --}}

</div>

@endsection
