@extends('layouts.layout')

@section('content')

<style>
    .content{
            display: flex;
            justify-content: center;

    }
    input {
        padding: 10px;
        margin: 10px;

        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 10px;
    }
    .label{
        size: 20px;

    }
    label, h5{
        color: white;
    }
</style>

<div class="d-flex justify-content-center" style="padding:3rem; padding-bottom:2rem">
    <h5>Hello, Welcome back to Movie List</h5>
  </div>
    {{-- <div class="content col align-items-center">
    <form action="/login" method="post" >
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie'): ''}}">
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <input type="checkbox" name="remember" id="remember" checked="{{Cookie::get('mycookie' !== null)}}">Remember Me
        <input type="submit" value="Login">
    </form>
    </div> --}}
    <form action="/login" method="post" class="row align-items-center" enctype="multipart/form-data">
        @csrf
        <div class="align-items-center">
            <div class="form-group row d-flex justify-content-center">
              <label for="email" class="col-sm-1 d-flex align-items-center col-form-label">Email</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie'): ''}}">
              </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
              <label for="password" class="col-sm-1 d-flex align-items-center col-form-label">Password</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
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
                    <button class=" mx-5 btn btn-danger" type="submit" style="padding:8px 13rem 8px 13rem; border-radius: 10px">Login-></button>
                </div>
            </div>
            <div class="row align-items-center">
                <div class=" d-flex justify-content-center row-md-3 ps-5 text-white">
                    Don't have an account? <a href="/register">Register now!</a>
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

@endsection
