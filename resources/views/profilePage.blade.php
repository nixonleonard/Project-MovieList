@extends('layouts.layout')

@section('content')
<style>
    .card{
        border:none;
    }
</style>
{{-- <button id="openModal" style="background-color:transparent" data-toggle="modal" data-target="#modalProfileImage">
    <img src="{{Auth::user($user->image)->profile_url}}" class="rounded-circle" width="125px" height="125px" alt="">
  </button> --}}



<div class="container" style="padding-top: 3rem; padding-bottom: 8rem;">
    <div class="row gutters d-flex justify-content-center">
    <div class="col-xl-3">
    <div class="card h-100 bg-transparent">
        <div class="card-body text-center text-light align-items-center d-flex justify-content-center">
            <div class="account-settings">
                <div class="user-profile">
                    <h5 class="align-items-center">My Profile</h5>
                </div>
                <div>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#popup">
                    <img class="image rounded-circle" src="{{asset($user->image)}}" alt="" style="width: 100px;height: 100px; padding: 10px; margin: 0px; ">
                    </button>
                    <div class="modal fade" id="popup" tabindex="-3" aria-labelledby="popup" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-dark">
                            <div class="modal-header">
                              <h4 class="modal-title" id="popup">Update Image</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter:invert(100%) sepia(1%) saturate(2%) hue-rotate(268deg) brightness(115%) contrast(101%);"></button>
                            </div>
                            <div class="modal-body">
                              <form action="">
                                @csrf
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" name="image" id="image" value="{{$user->image}}">
                                  </div>
                                  <p class="text-muted" style="padding-top:1rem; ">Please upload your image to other sources first and Use the URL</p>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="about">
                    <h6>{{$user->username}}</h6>
                    <p>{{$user->email}}</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-xl-6">
    <div class="card h-100 bg-transparent">
        <div class="card-body text-light">
                <h5 class="mb-2">Update Profile</h5>
                <form action="/updateprofile" method="post" class="row align-items-center" enctype="multipart/form-data">
                    @csrf
                    <div class="align-items-center">
                        <div class="form-group row d-flex justify-content-center pt-2">
                          <label for="username" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">
                          </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center pt-2">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center pt-2">
                            <label for="dob" class="col-sm-3 col-form-label">DOB</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="dob" id="dob" value="{{$user->DOB}}">
                            </div>
                          </div>

                        <div class="form-group row d-flex justify-content-center pt-2">
                          <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}">
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <button type="submit" style="margin-top:20px; margin-left:22px;" class="btn btn-danger form-control">Save Changes</button>
                        </div>

                    </div>
                </form>
        </div>
    </div>
    </div>
    </div>
</div>

@endsection
