@extends('layouts.user_layout')

@section('content')


<!-- Page Title start -->
<div class="pageTitle">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h1 class="page-heading">Login</h1>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Login</span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Title End -->
      
      <div class="innercms">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                @if(Session::has('error'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                @endif
            </div>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="userccount">
                <h5>User Login</h5>
                <!-- login form -->
                <form method="POST" action="{{ route('user.user_login.submit') }}" data-parsley-validate >
                  @csrf
                  <div class="formpanel">
                    <div class="formrow">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-parsley-trigger="keyup" data-parsley-required="true">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="formrow">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-parsley-trigger="keyup" data-parsley-required="true">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" class="btn" value="Login">
                  </div>
                  <!-- login form  end--> 
                </form>
                <!-- sign up form -->
                <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="{{ route('user.user_register_form') }}">Register Here</a></div>
                <!-- sign up form end-->
                
                <div class="socialLogin">
                  <h5>Login Or Register with Social</h5>
                  <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection