@extends('layouts.user_layout')

@section('content')
<!-- Page Title start -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <h1 class="page-heading">Dashboard</h1>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="breadCrumb"><a href="{{route('user.user_dashboard')}}}">Dashboard</a> / <span>Login</span></div>
        </div>
        </div>
    </div>
</div>
      <!-- Page Title End -->
      
<div class="innercms">
    <div class="container">
        <div class="row">  	                        
        <div class="col-md-4">
            <div class="profilebx profilewht">
                <div class="userprofilewrap">
                    <img src="{{ URL::asset('property/images/client-img1.jpg') }}">
                </div>
                        
                <h2>{{Auth::user()->name }} {{Auth::user()->lname}}</h2>
                <h3>
                    @if(Auth::user()->user_type == 1)
                        User
                    @else
                        Contractor
                    @endif
                </h3>
                <ul class="address">
                    <li><i class="fa fa-phone"></i>{{ Auth::user()->contact_no }}</li>
                    <li><i class="fa fa-envelope-o"></i><a href="#">{{Auth::user()->email}}</a></li>
                    <li><i class="fa fa-map-marker"></i>Pakistan</li>
                    <li><i class="fa fa-globe"></i><a href="#">www.domainname.com</a></li>
                </ul>
                <ul class="list-inline social">
                    <li> <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0);"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0);"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                </ul>                  
            </div>
        </div>
        <div class="col-md-8">
                <!--Reviews-->
            <div class="ratingbox">
                <h4>There are 23 reviews and Rating for Sarah Annabelle</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="overallrating">
                        <h6>4.7</h6>
                        <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </div>
                        <div class="txt1">Average Rating</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="ratrow">
                        <div class="row">
                            <div class="col-sm-7 col-xs-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (success)</span> </div>
                            </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                            <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <strong>80%</strong> </div>
                            </div>
                        </div>
                        </div>
                        <div class="ratrow">
                        <div class="row">
                            <div class="col-sm-7 col-xs-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (success)</span> </div>
                            </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                            <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <strong>60%</strong> </div>
                            </div>
                        </div>
                        </div>
                        <div class="ratrow">
                        <div class="row">
                            <div class="col-sm-7 col-xs-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> <span class="sr-only">30% Complete (success)</span> </div>
                            </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                            <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <strong>30%</strong> </div>
                            </div>
                        </div>
                        </div>
                        <div class="ratrow">
                        <div class="row">
                            <div class="col-sm-7 col-xs-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%"> <span class="sr-only">15% Complete (success)</span> </div>
                            </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                            <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <strong>15%</strong> </div>
                            </div>
                        </div>
                        </div>
                        <div class="ratrow">
                        <div class="row">
                            <div class="col-sm-7 col-xs-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%"> <span class="sr-only">5% Complete (success)</span> </div>
                            </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                            <div class="ratestar"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <strong>5%</strong> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>                   	 
        </div>
    </div>
            
    <div class="row">
        <div class="col-lg-3">                      
            <ul class="usernavdash">

                <li class="active"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href=""><i class="fa fa-user" aria-hidden="true"></i> Edit Profile </a></li>
                <li><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i> View My Profile</a></li>
                <li><a href="{{route('user.property.create')}}"><i class="fa fa-certificate" aria-hidden="true"></i> My Properties</a></li>
                <li><a href=""><i class="fa fa-certificate" aria-hidden="true"></i> Expired Properties</a></li>
                <li><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i> My Favourites Properties</a></li>
                <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Packages</a>  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></li>
                <li><a href=""><i class="fa fa-calendar-o" aria-hidden="true"></i> Property Alerts</a></li>
                <li><a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> Reviews</a></li>
                <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>

            </ul>                
        </div>
    
        <div class="col-lg-9">      
            <ul class="row profilestat">
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
                        <h6>10</h6>
                        <strong>Profile Views</strong>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-home" aria-hidden="true"></i>
                        <h6>5</h6>
                        <strong>Active Properties</strong> 
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h6>10</h6>
                        <strong>Expire Properties</strong> 
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-users" aria-hidden="true"></i>
                        <h6>21</h6>
                        <strong>Clients</strong> 
                    </div>
                </li>
            </ul>  
            <div class="instoretxt">
                <div class="credit">Your Package is: <strong>Basic package - USD50.00</strong></div>
                <div class="credit">Package Duration : <strong>15 Jan, 2020</strong> - <strong>25 Jan, 2020</strong></div>
                <div class="credit">Can Add Properties : <strong>2</strong> / <strong>5</strong></div>
            </div>
          </div>
        </div>
    </div>
</div>
      
@endsection