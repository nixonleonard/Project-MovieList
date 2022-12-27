@extends('layouts.layout_guest')

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

<div class="d-flex justify-content-center" style="padding:3rem; padding-bottom:2rem">
    <h5>Hello, Welcome back to Movie List</h5>
</div>
<form action="/login" method="post" class="row align-items-center">
    @csrf
    <div class="align-items-center">
        <div class="form-group row d-flex justify-content-center">
          <label for="username" class="col-sm-1 d-flex align-items-center col-form-label">Username</label>
          <div class="col-sm-3">
            <input type="username" class="form-control" id="username" placeholder="Enter your username">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
            <label for="email" class="col-sm-1 d-flex align-items-center col-form-label">Email</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
          </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="password" class="col-sm-1 d-flex align-items-center col-form-label">Password</label>
          <div class="col-sm-3">
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="confirm_password" class="col-sm-1 d-flex align-items-center col-form-label">Confirm Password</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" id="confirm_password" placeholder="Enter your Confirm password">
            </div>
          </div>
        <div class="form-group row align-items-center my-2">
            <div class="d-flex justify-content-center">
                <input type="submit" class="mx-5" style="padding-left: 13rem; padding-right: 13rem;" value="Register->">
            </div>
        </div>
        <div class="row align-items-center">
            <div class=" d-flex justify-content-center row-md-3 ps-5">
                Already have an account? <a href="/login"> Login now!</a>
            </div>
        </div>
    </div>
</form>
</section>

@endsection
