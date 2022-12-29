@extends('layouts.layout')

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

    label, h5{
        color: white;
    }
</style>

<div class="form-row" style="padding-left: 11rem; padding-top: 3rem;">
    <h5>Create Movie</h5>
</div>

<form style="padding-bottom: 3rem">
    <div class="form-row" style="padding-left: 11rem">
      <div class="form-group col-md-10">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title">
      </div>
      <div class="form-group col-md-10">
        <label for="description">Description</label>
        <textarea type="text" style="margin-top:10px; margin-left:10px;" class="form-control" id="description" rows="5"></textarea>
      </div>
      <div class="form-group col-md-10">
        <label for="inputAddress">Genre</label>
        <select class="form-control custom-select-lg mb-3" style="margin-top:10px; margin-left:10px;" >
            <option selected>Select an option</option>
            @foreach ($genre as $g)
                <option value="{{$g->name}}">{{$g->name}}</option>
            @endforeach

          </select>
      </div>

      <div class="form-group col-md-10">
        <label for="actor">Actor</label>
        <input type="text" class="form-control" id="actor">
      </div>

      <div class="form-group col-md-10">
        <label for="character">Character Name</label>
        <input type="text" class="form-control" id="character">
      </div>

      <div class="form-group col-md-10">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director">
      </div>

      <div class="form-group col-md-10 col-form-label">
        <label for="release">Release Date</label>
        <input type="date" class="form-control" id="release">
      </div>

      <div class="form-group col-md-10">
        <label for="image">Image URL</label>
        <input type="file" class="form-control" id="image">
      </div>

      <div class="form-group col-md-10">
        <label for="background">Background URL</label>
        <input type="file" class="form-control" id="background">
      </div>

      <div class="form-group col-md-10">
        <button type="submit" style="margin-top:20px; margin-left:10px;" class="btn btn-danger form-control">Create</button>
      </div>

    </div>
  </form>

@endsection

