@extends('layouts.layout')

@section('content')
<div class="box p-5">
    <div style="display: flex">
        <div class="mt-3 d-flex">
            <i class="fas fa-bookmark fa-3x me-4" style="color: red; size"></i>
            <div class="text-light h3">My</div>
            <div class="text-danger h3">Watchlist</div>
        </div>

    </div>
    <div class="input-group mt-5">
        <input class="form-control bg-dark text-light border border-dark" type="text" value="Search your watchlist..." id="example-search-input">
            <span class="input-group-append">
                <button class="btn bg-dark " type="button">
                    <i class="fas fa-search" style="color: white"></i>
                </button>
            </span>
        </div>
        {{-- filter --}}
    <div class="d-flex align-item-center my-4">
        <i class="fas fa-filter fa-1x me-4 text-light my-2"></i>
        <form action="" method="post">
            @csrf
            <select class="form-select bg-transparent border-0 text-light" name="status" onchange="this.form.submit()">
                <option class="text-dark" value="all">All</option>
                <option class="text-dark" value="planning" @if($selected && $selected == 'planning') selected @endif>Planned</option>
                <option class="text-dark" value="watching" @if($selected && $selected == 'watching') selected @endif>Watching</option>
                <option class="text-dark" value="finished" @if($selected && $selected == 'finished') selected @endif>Finished</option>
            </select>
        </form>
    </div>

    {{-- table title --}}
    <div class="mt-5">
        <div class="row text-light  my-3">
            <div class="col-3">
                Poster
            </div>
            <div class="col-4">
                Title
            </div>
            <div class="col-3">
                Status
            </div>
            <div class="col-2">
                Action
            </div>
        </div>

        {{-- table content --}}
        <div class="row text-light bg-dark my-3" style="height: 100px">
            <div class="col-3">
                Poster
            </div>
            <div class="col-4">
                Title
            </div>
            <div class="col-3">
                Status
            </div>
            <div class="col-2">
                Action
            </div>
        </div>
        <div class="row text-light bg-dark my-3" style="height: 100px">
            <div class="col-3">
                Poster
            </div>
            <div class="col-4">
                Title
            </div>
            <div class="col-3">
                Status
            </div>
            <div class="col-2">
                Action
            </div>
        </div>
        <div class="row text-light bg-dark my-3" style="height: 100px">
            <div class="col-3">
                Poster
            </div>
            <div class="col-4">
                Title
            </div>
            <div class="col-3">
                Status
            </div>
            <div class="col-2">
                Action
            </div>
        </div>
        <div class="row text-light bg-dark my-3" style="height: 100px">
            <div class="col-3">
                Poster
            </div>
            <div class="col-4">
                Title
            </div>
            <div class="col-3">
                Status
            </div>
            <div class="col-2">
                Action
            </div>
        </div>

            {{-- pagination --}}
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-secondary">Showing
                    <span class="fw-bold">{{$movies->firstItem()}}</span>
                    to
                    <span class="fw-bold">{{$movies->lastItem()}}</span>
                    of
                    <span class="fw-bold">{{$movies->total()}}</span>
                    results
                </p>
                <div class="d-flex">
                    {!!$movies->links()!!}
                </div>
            </div>
    </div>
</div>


@endsection
