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
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="userccount">
                    <div class="formpanel">
                        <h5>Choose Account type</h5>
                        <div class="row">
                        <div class="col-md-6"><a href="{{ route('user.user_login') }}" class="btn">Agent Login</a></div>
                        <div class="col-md-6"><a href="{{ route('user.user_login') }}" class="btn">Individual Login</a></div>
                        </div>	
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection