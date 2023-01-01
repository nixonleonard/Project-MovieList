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

<form action="/createmovie" method="post" style="padding-bottom: 3rem" enctype="multipart/form-data">
    @csrf
    <div class="form-row" style="padding-left: 11rem">
      <div class="form-group col-md-10">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
      </div>
      <div class="form-group col-md-10">
        <label for="description">Description</label>
        <textarea type="text" style="margin-top:10px; margin-left:10px;" class="form-control" id="description" name="description" rows="5"></textarea>
      </div>
    <div class="form-check-inline col-md-10 py-2">
          <label for="inputAddress">Genre</label>
          <div class="d-flex flex-nowrap">
              @foreach ($genre as $g)
              <div class="d-flex">
                  <input class="form-check-input" type="checkbox" name="genre[]" value="{{$g->id}}" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                      {{$g->name}}
                    </label>
                </div>
                @endforeach
            </div>
      </div>

      <div class="form-group col-md-10">
        <label for="actor">Actor</label>
        <div class="row">
            <div class="form-gorup col-xl-12 col-md-12 col-sm-12 child-repeater-table">
                <table class="table table-bordered table-responsive" >
                    <tbody>
                        <div class="row" style="padding: 10px 10px 0">
                            <div class="col">
                                <label for="actor">Actor</label>
                                <select name="actor[0][id]" id="" class="form-control" style="margin: 10px 10px 0 0">
                                    <option value="">-- Open this selected menu --</option>
                                    @foreach ($actor as $a)
                                    <option value="{{$a->id}}">{{$a->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="character">Character Name</label>
                              <input type="text" class="form-control" name="character[0][cname]">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 10px 0">
                            <div class="col">
                                <label for="actor">Actor</label>
                                <select name="actor[1][id]" id="" class="form-control" style="margin: 10px 10px 0 0">
                                    <option value="">-- Open this selected menu --</option>
                                    @foreach ($actor as $a)
                                    <option value="{{$a->id}}">{{$a->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="character">Character Name</label>
                              <input type="text" class="form-control" name="character[1][cname]">
                            </div>
                        </div>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end pt-2">
                    <a href="JavasScript:void(0)" onclick="dynamicForm()" class="btn btn-primary addRow">Add More</a>
                </div>
            </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script>
        let i = 1;
        function dynamicForm(){
            i++;
            var div =  "<div class= 'row' style='padding: 10px 10px'>"+
                                "<div class='col'>"+
                                    "<label for='actor'>Actor</label>"+
                                    "<select name='actor[${i}][id]' id='' class='form-control' style='margin: 10px 10px 0 0'>"+
                                        "<option value=''>-- Open this selected menu --</option>"+
                                        "@foreach ($actor as $a)"+
                                            "<option value='{{$a->name}}''>{{$a->name}}</option>"+
                                        "@endforeach"+
                                    "</select>"+
                                "</div>"+
                                "<div class='col'>"+
                                    "<label for='character'>Character Name</label>"+
                                    "<input type='text' class='form-control' name='character[${i}][cname]'>"+
                               "</div>"+
                            "</div>";
            $('tbody').append(div);

        }
      </script>

      <div class="form-group col-md-10">
        <label for="director">Director</label>
        <input type="text" class="form-control" name="director" id="director">
      </div>

      <div class="form-group col-md-10 col-form-label">
        <label for="release">Release Date</label>
        <input type="date" class="form-control" name="release_date" id="release">
      </div>

      <div class="form-group col-md-10">
        <label for="thumbnail">Image URL</label>
        <input type="file" class="form-control" name="thumbnail" id="image">
      </div>

      <div class="form-group col-md-10">
        <label for="background">Background URL</label>
        <input type="file" class="form-control" name="background" id="background">
      </div>

      <div class="form-group col-md-10">
        <button type="submit" style="margin-top:20px; margin-left:10px;" class="btn btn-danger form-control">Create</button>
      </div>

    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  </form>

@endsection

