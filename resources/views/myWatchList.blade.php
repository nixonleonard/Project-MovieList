@extends('layouts.layout')

@section('content')
<div class="box p-5">
    <div style="display: flex">
        <div class="mt-5 d-flex">
            <i class="fas fa-bookmark fa-3x" style="color: red; size"></i>
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

    <div class="mt-5">
        <table class="table text-light">
            <thead >
              <tr>
                <th scope="col">Poster</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            {{-- <tbody>
                @foreach ( as )
                <td>
                    <img width="200px" height="200px" src="{{Storage::url('images/')}}" alt="">
                </td>
                <td></td>
                <td></td>
                <td></td>
                @endforeach
            </tbody> --}}

          </table>
            {{-- <div>
                <a href="{{$students->previousPageUrl()}}">&laquo;</a>
                @for ($i=1 ; $i <=$students->lastPage(); $i++)
                    @if ($i == $students->currentPage())
                        <b><a href="{{$students->url($i)}}">{{$i}}</a></b>
                    @else
                        <a href="{{$students->url($i)}}">{{$i}}</a>
                    @endif
                @endfor
                <a href="{{$students->nextPageUrl()}}">&raquo;</a>
            </div> --}}
    </div>
</div>







@endsection
