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

<div class="d-flex justify-content-center" style="padding:3rem; padding-bottom:2rem">
    <h5>Hello, Welcome back to Movie List</h5>
</div>
<form action="/register" method="post" class="row align-items-center">
    @csrf
    <div class="align-items-center">
        <div class="form-group row d-flex justify-content-center">
          <label for="username" class="col-sm-1 d-flex align-items-center col-form-label">Username</label>
          <div class="col-sm-3">
            <input name="username" type="username" class="form-control" id="username" placeholder="Enter your username">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
            <label for="email" class="col-sm-1 d-flex align-items-center col-form-label">Email</label>
            <div class="col-sm-3">
              <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
          </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="password" class="col-sm-1 d-flex align-items-center col-form-label">Password</label>
          <div class="col-sm-3">
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <label for="confirm_password" class="col-sm-1 d-flex align-items-center col-form-label">Confirm Password</label>
            <div class="col-sm-3">
              <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Enter your Confirm password">
            </div>
          </div>
          <div class="form-group row  align-items-center my-2">
            <div class="d-flex justify-content-center">
                <button class=" mx-5 btn btn-danger" type="submit" style="padding:8px 13rem 8px 13rem; border-radius: 10px">Register-></button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class=" d-flex justify-content-center row-md-3 ps-5 text-white">
                Already have an account? <a href="/login"> Login now!</a>
            </div>
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
</section>

@endsection
