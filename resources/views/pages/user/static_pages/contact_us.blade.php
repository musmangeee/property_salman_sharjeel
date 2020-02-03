@extends('layouts.user_layout')

@section('content')
<!--Page Title Start-->
<div class="pageTitle">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h1 class="page-heading">Contact Us</h1>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Contact Us</span></div>
            </div>
          </div>
        </div>
      </div>
      <section class="section innercms">
        <div class="container">
          <div class="contact-wrap"> 
            
            <!-- Contact Info -->
            
            <div class="contact-now row">
              <div class="col-md-4 column">
                <div class="contact"> <span><i class="fa fa-home"></i></span>
                  <div class="information"> <strong>Address:</strong>
                    <p>8500 lorem, New Ispum, Dolor amet sit 12301<br>
                      New York, USA</p>
                  </div>
                </div>
              </div>
              <!-- Contact Info -->
              <div class="col-md-4 column">
                <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                  <div class="information"> <strong>Email Address:</strong>
                    <p>investigate@your-site.com</p>
                    <p>investigate@your-site.com</p>
                  </div>
                </div>
              </div>
              <!-- Contact Info -->
              <div class="col-md-4 column">
                <div class="contact"> <span><i class="fa fa-phone"></i></span>
                  <div class="information"> <strong>Phone No:</strong>
                    <p>+12 345 67 09</p>
                    <p>+12 345 67 09</p>
                  </div>
                </div>
              </div>
              <!-- Contact Info --> 
            </div>
            
            <!-- Contact form -->
            <div class="column">
              <div class="contact-form">
                <div id="message"></div>
                <form method="post" action="" name="contactform" id="contactform">
                  <div class="row">
                    <div class="col-md-6">
                      <input name="name" type="text" id="name" placeholder="Full Name">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                      <input name="email" type="text" id="email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <input name="email" type="text" id="email" placeholder="Address">
                    </div>
                    <div class="col-md-12">
                      <textarea rows="4" name="comments" id="comments" placeholder="Details"></textarea>
                    </div>
                    <div class="col-md-12">
                      <button title="" class="sitebtn" type="submit" id="submit">Submit Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
@endsection