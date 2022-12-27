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
    .label{
        size: 20px;
    }
</style>

<div class="d-flex justify-content-center" style="padding:3rem; padding-bottom:2rem">
    <h5>Hello, Welcome back to Movie List</h5>
  </div>

    @auth
        Hi, {{Auth::user()->name}}
        @if (Session::get('mysession'))
            <div>
                Your email is {{Session::get('mysession')['email']}}
            </div>
        @endif
        @if (Auth::user()->is_admin == "admin")
            <div>
                <a href="/admin">Admin Page</a>
            </div>
        @endif
        <form action="/logout" method="get">
            <input type="submit" value="Logout">
        </form>
    @else
    {{-- <div class="content col align-items-center">
    <form action="/login" method="post" >
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie'): ''}}">
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <input type="checkbox" name="remember" id="remember" checked="{{Cookie::get('mycookie' !== null)}}">Remember Me
        <input type="submit" value="Login">
    </form>
    </div> --}}
    <form action="/login" method="post" class="row align-items-center">
        @csrf
        <div class="align-items-center">
            <div class="form-group row d-flex justify-content-center">
              <label for="email" class="col-sm-1 d-flex align-items-center col-form-label">Email</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" id="email" placeholder="Enter your email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie'): ''}}">
              </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
              <label for="password" class="col-sm-1 d-flex align-items-center col-form-label">Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
              </div>
            </div>
            <div class="form-group col d-flex justify-content-center align-items-center" style="padding-right:8rem;">
                <input type="checkbox" name="remember" id="remember" checked="{{Cookie::get('mycookie' !== null)}}">
                <div class="col-sm-3">
                    <label for="remember" class="row-sm-1 d-flex ">Remember Me</label>
                </div>
            </div>
            <div class="form-group row  align-items-center my-2">
                <div class="d-flex justify-content-center">
                    <input type="submit" class="mx-5" style="padding-left: 13rem; padding-right: 13rem;" value="Login->">
                </div>
            </div>
            <div class="row align-items-center">
                <div class=" d-flex justify-content-center row-md-3 ps-5">
                    Don't have an account? <a href="/register">Register now!</a>
                </div>
            </div>
        </div>
    </form>
        @endif
@endsection
