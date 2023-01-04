@extends('layouts.layout')

@section('content')
<div class="box p-5" style="padding-bottom: 2rem;">
    <div style="display: flex">
        <div class="mt-3 d-flex">
            <i class="fas fa-bookmark fa-3x me-4" style="color: red; size"></i>
            <div class="text-light h3">My</div>
            <div class="text-danger h3">Watchlist</div>
        </div>

    </div>
    <div class="input-group mt-5">
        <form action="/mywatchlist" class="d-flex justify-content-end">
            <div class="input-group rounded d-flex justify-content-end" style="width: 300px; height: 30px" >
                <input type="search" name="search" id="search" class="form-control rounded bg-dark text-light border border-dark" placeholder="Search movie..." aria-label="Search"/>
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="d-flex align-item-center my-4">
        <i class="fas fa-filter fa-1x me-4 text-light my-2"></i>
        <form action="/mywatchlist" method="post">
            @csrf
            <select class="form-select bg-transparent border-0 text-light" name="status" onchange="this.form.submit()">
                <option class="text-dark" value="filter" selected>Filter</option>
                <option class="text-dark" value="all">All</option>
                <option class="text-dark" value="planned">Planned</option>
                <option class="text-dark" value="watching">Watching</option>
                <option class="text-dark" value="finished">Finished</option>
            </select>
        </form>
    </div>



    <div class="mt-5" style="padding-bottom: 8rem">
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

        @if ($movie != null)
            @foreach ($movie as $m)
            <div class="row text-light bg-dark my-3 d-flex align-items-center" style="height: 100px">
                <div class="col-3">
                    <img src="{{asset($m->thumbnail)}}" style="height: 100px">
                </div>
                <div class="col-4">
                    {{$m->title}}
                </div>
                <div class="col-3">
                    {{$m->status}}
                </div>
                <div class="col-2">
                    <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#popup{{$m->id_wl}}">...</button>
                    <div class="modal fade" id="popup{{$m->id_wl}}" tabindex="-3" aria-labelledby="popup{{$m->id_wl}}" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-dark">
                            <div class="modal-header">
                              <h4 class="modal-title" id="popup{{$m->id_wl}}">Change Status</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter:invert(100%) sepia(1%) saturate(2%) hue-rotate(268deg) brightness(115%) contrast(101%);"></button>
                            </div>
                            <div class="modal-body">
                              <form action="/changestatus/{{$m->id_wl}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$m->id}}" name="id">
                                <div class="form-group col-md-10">
                                    <select class="bg-dark text-light form-select mx-3" name="status" id="status">
                                        <option value="planned">Planned</option>
                                        <option value="watching">Watching</option>
                                        <option value="finished">Finished</option>
                                        <option value="remove">Remove</option>
                                    </select>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Save changes</button>
                                  </div>
                              </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        @endforeach

        @endif

        <div class="d-flex justify-content-between align-items-center">
            <p class="text-secondary">Showing
                <span class="fw-bold">{{$movie->firstItem()}}</span>
                to
                <span class="fw-bold">{{$movie->lastItem()}}</span>
                of
                <span class="fw-bold">{{$movie->total()}}</span>
                results
            </p>
            <div class="d-flex">
                {{$movie->links()}}
            </div>
        </div>
    </div>
</div>


@endsection
