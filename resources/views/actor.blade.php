@extends('layouts.layout')

@section('content')

<div class="box p-5">
    <p class="text-danger h3 pb-5">Actors</p>

    {{-- @foreach ( as ) --}}
    <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    {{-- @endforeach --}}

</div>

@endsection
