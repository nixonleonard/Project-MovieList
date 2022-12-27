@extends('layouts.layout_admin')

@section('content')
<style>
    .content{
            display: flex;
            justify-content: center;

    }
    input {
        padding: 5px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 10px;
    }
</style>
<div class="form-row my-4" style="padding-left: 11rem; padding-top: 3rem;">
    <h5>Edit Movie</h5>
</div>

<form>
    <div class="form-row" style="padding-left: 11rem">
      <div class="form-group col-md-10">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" value="Nanti isi disini">
      </div>
      <div class="form-group col-md-10">
        <label for="description">Description</label>
        <textarea type="text" style="margin-top:10px; margin-left:10px;" class="form-control" id="description" rows="5"> nanti diisi</textarea>
      </div>
      <div class="form-group col-md-10">
        <label for="inputAddress">Genre</label>
        <select class="form-control custom-select-lg mb-3" style="margin-top:10px; margin-left:10px;" value="Nanti isi disini">
            <option selected>Select an option</option>
            {{-- @foreach ( as )

            @endforeach --}}
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
      </div>
      <div class="form-group col-md-10">
        <label for="actor">Actors</label>
        <input type="text" class="form-control" id="actor" value="Nanti isi disini">
      </div>
      <div class="form-group col-md-10">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" value="Nanti isi disini">
      </div>

      <div class="form-group col-md-10 col-form-label">
        <label for="release">Release Date</label>
        <input type="date" class="form-control" id="release" value="nanti diisi">
      </div>

      <div class="form-group col-md-10">
        <label for="image">Image URL</label>
        <input type="file" class="form-control" id="image" value="Nanti isi disini">
      </div>

      <div class="form-group col-md-10">
        <label for="background">Background URL</label>
        <input type="file" class="form-control" id="background" value="Nanti isi disini">
      </div>

      <div class="form-group col-md-10">
        <button type="submit" style="margin-top:20px; margin-left:10px;" class="btn btn-primary form-control">Edit</button>
      </div>

    </div>
  </form>

@endsection

