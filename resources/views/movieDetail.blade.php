@extends('layouts.layout')

@section('content')

{{-- <div style="background-image: url('storage/images/avatar.jpg'); height: 400px; background-repeat: no-repeat; background-size: cover">
    <img src="{{url('storage/'.$actor->image)}}" style="height: 18rem; object-fit: cover;" alt="">
</div> --}}



<div class="box p-5 text-light">
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">Cast</p>
        <br>
        <b class="text-danger d-inline-block">|</b>
        <p class="d-inline-block">More</p>
</div>

@endsection
