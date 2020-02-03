@extends('layouts.user_layout')

@section('content')
    <!--Page Title Start-->
<div class="pageTitle">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h1 class="page-heading">About Us</h1>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadCrumb"><a href="#.">Home</a> / <span>About Us</span></div>
            </div>
          </div>
        </div>
      </div>
      <section class="section aboutwrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="abimage"> <img src="{{URL::asset('property/images/about-company.jpg') }}" alt="Construction"> </div>
            </div>
            <div class="col-lg-7">
              <div class="titleTop">
                <div class="subtitle">Our Mission</div>
                <h3>Construction Company</h3>
                <div class="seprate"><img src="{{URL::asset('property/images/seprator.png') }}"></div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula malesuada nisi eu rutrum. Maecenas purus diam, lobortis at velit eget, ultricies posuere augue. Nullam nec lectus a augue dictum euismod ut sed ex. Integer pretium arcu neque, vitae mollis massa consequat eu. In eget dolor luctus, varius dui fringilla, lobortis odio. Cras molestie nunc pretium, dictum lorem vel, vulputate mi. Etiam ac ligula bibendum, luctus diam sit amet, rutrum ipsum. <br>
                <br>
                Praesent tempus at neque non hendrerit. In euismod vestibulum sodales. Fusce feugiat dapibus facilisis. Sed interdum mauris sed vulputate fringilla. Sed purus dui, tempus tempor velit vel, feugiat eleifend nulla.</p>
              <ul class="circleList row">
                <li class="col-md-4 col-sm-4">
                  <div class="cricle"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                  <div class="title">BUILDING</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="cricle"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                  <div class="title">RENOVATION</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="cricle"><i class="fa fa-tags" aria-hidden="true"></i></div>
                  <div class="title">INTERIOR</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="innercms">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id justo nulla. Sed ut sem elit. In eros enim, faucibus eu varius non, iaculis nec diam. Morbi arcu sem, vulputate vel mi et, semper egestas augue. Pellentesque molestie ornare fermentum. Praesent viverra odio a lectus finibus imperdiet. Pellentesque condimentum erat in ipsum hendrerit, non elementum nunc faucibus. Phasellus semper, lorem quis sollicitudin condimentum, mi nunc auctor nisi, molestie molestie mauris diam vel felis. Phasellus feugiat congue nunc auctor fringilla. Aliquam purus sem, eleifend non efficitur ac, venenatis non nisi. <br>
                <br>
                Sed sed fringilla elit. Aliquam ut pharetra metus. Praesent iaculis, quam et posuere auctor, mi arcu fermentum elit, in condimentum arcu mi vitae ligula. Morbi vitae est sit amet neque ultricies facilisis sed ac ligula. Nunc vel leo lacus. Nulla sit amet eros libero. Integer auctor diam ac eros sodales, non congue diam elementum. Curabitur accumsan, sapien sed pulvinar feugiat, tortor lectus mollis sem, vel posuere elit ligula vel nulla. Donec ac commodo arcu, vitae congue urna. Vestibulum fringilla ante quam, sit amet euismod quam dignissim at. Maecenas pellentesque ex vitae augue congue volutpat. Etiam ut pellentesque dolor, quis elementum felis. Integer accumsan nisl tortor, quis consectetur tellus ultricies et. Suspendisse aliquet, quam eu finibus tempor, nunc risus finibus risus, sed faucibus purus orci non metus. </p>
            </div>
            <div class="col-lg-5">
              <div class="abimage"> <img src="{{URL::asset('property/images/how-it-work.jpg') }}" alt="How it works"> </div>
            </div>
          </div>
        </div>
      </section>
      
@endsection