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
    <h5>Edit Actor</h5>
</div>

<form>
    <div class="form-row" style="padding-left: 11rem">
      <div class="form-group col-md-10">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" value="nanti di isi">
      </div>

      <div class="form-group col-md-10">
        <label for="gender">Gender</label>
        <select class="form-control custom-select-lg mb-3" style="margin-top:10px; margin-left:10px;" >
            <option selected>Select an option</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
      </div>
      <div class="form-group col-md-10">
        <label for="biography">Biography</label>
        <textarea type="text" style="margin-top:10px; margin-left:10px;" class="form-control" id="biography" rows="5">nanti diisi</textarea>
      </div>

      <div class="form-group col-md-10 col-form-label">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" value="nanti di isi">
      </div>

      <div class="form-group col-md-10">
        <label for="pob">Place of Birth</label>
        <input type="text" class="form-control" id="pob" value="nanti di isi">
      </div>

      <div class="form-group col-md-10">
        <label for="image">Image URL</label>
        <input type="file" class="form-control" id="image">
      </div>

      <div class="form-group col-md-10">
        <label for="popularity">Popularity</label>
        <input type="number" step="0.01" class="form-control" id="popularity" value="nanti di isi">
      </div>

      <div class="form-group col-md-10">
        <button type="submit" style="margin-top:20px; margin-left:10px; padding-left:5rem; padding-right:5rem" class="btn btn-primary">Edit</button>
      </div>

    </div>
  </form>

@endsection

