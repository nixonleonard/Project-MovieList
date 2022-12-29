@extends('layouts.layout')

@section('content')

<div class="box p-5">
    <div class="d-flex justify-content-between" style="padding-right: 2rem">
        <p class="text-danger h3 pb-5">Actors</p>
        <form action="/actor" class="d-flex justify-content-end">
            <div class="input-group rounded d-flex justify-content-end" style="width: 300px; height: 30px" >
                <input type="search" name="search" id="search" class="form-control rounded bg-dark text-light border border-dark" placeholder="Search movie..." aria-label="Search"/>
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
    @auth
        @if (Auth::user()->is_admin == 'admin')
            <div class=" d-flex justify-content-end" style="padding-right: 2rem">
                <a href="/createactor"><button type="button" class="btn btn-danger">+ Add Actor</button></a>
            </div>
        @endif
    @endauth
    <div class="d-flex flex-wrap justify-content-center">
        {{-- <div class="card-group px-5"> --}}
            @foreach ($actor as $a)
            <div class="card bg-dark text-light m-3">
                    <div class="card text-white bg-transparent mb-5 " style="width: 15rem; border:none;">
                        <a href="/actordetail/{{$a->name}}"><img src="{{asset($a->image)}}" class="card-img-top" style = "height:20rem;" alt="..."></a>
                        <div class="card-body px-4" style="height: 5rem;">
                        <h6 style="height: 1rem;">{{$a->name}} </h6>
                        <p class="text-muted" style="height: 2rem;">{{$a->title}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>
    </div>
</div>


@endsection
