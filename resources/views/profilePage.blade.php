@extends('layouts.layout')

@section('content')
<style>
    .card{
        border:none;
    }
</style>

<div class="container" style="padding-top: 3rem;">
    <div class="row gutters d-flex justify-content-center">
    <div class="col-xl-3">
    <div class="card h-100">
        <div class="card-body text-center align-items-center d-flex justify-content-center">
            <div class="account-settings">
                <div class="user-profile">
                    <h5 class="align-items-center">My Profile</h5>
                </div>
                <div>
                    <img src="" alt="">
                </div>
                <div class="about">
                    <p>nama</p>
                    <p>gmail</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-xl-6">
    <div class="card h-100">
        <div class="card-body">
            <div class="col gutters">
                <h5 class="mb-2">Update Profile</h5>
                <form action="/login" method="post" class="row align-items-center">
                    @csrf
                    <div class="align-items-center">
                        <div class="form-group row d-flex justify-content-center pt-2">
                          <label for="username" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" value="nanti diisi">
                          </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center pt-2">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="email" value="nanti diisi">
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center pt-2">
                            <label for="dob" class="col-sm-3 col-form-label">DOB</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="dob" value="nanti diisi">
                            </div>
                          </div>

                        <div class="form-group row d-flex justify-content-center pt-2">
                          <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="phone" value="123123123">
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <button type="submit" style="margin-top:20px; margin-left:22px;" class="btn btn-primary form-control">Save Changes</button>
                        </div>

                    </div>
                </form>
        </div>
    </div>
    </div>
    </div>
</div>

@endsection
