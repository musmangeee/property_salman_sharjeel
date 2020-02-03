@extends('layouts.user_layout')

@section('content')

<!-- Page Title start -->
<div class="pageTitle">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h1 class="page-heading">Register</h1>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadCrumb"><a href="{{'/'}}">Home</a> / <span>Register</span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Title End -->
      
      <div class="innercms">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="userccount">
                  <h5 class="modal-title">Create New Account </h5>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif
                
                  <div class="userbtns">
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#individual" aria-expanded="true">For Individual </a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#business" aria-expanded="false">For Agent</a></li>                
                    </ul>
                  </div>

                  <div class="tab-content">
                    <div id="individual" class="formpanel tab-pane active">
                      <form method="POST" action="{{ route('user.user_register') }}" data-parsley-validate>
                        @csrf
                        <input type="hidden" name="user_type" value="1">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="formrow">
                              <input type="text" name="name" class="form-control" placeholder="First Name">
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="formrow">
                              <input type="text" name="lname" class="form-control" placeholder="Last Name" data-parsley-trigger="keyup" data-parsley-required="true">
                            </div>
                          </div>
                        </div>
                        
                        <div class="formrow">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-parsley-trigger="keyup" data-parsley-required="true">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror				
                        
                        <div class="formrow">
                          <input type="text" name="contact_no" class="form-control" placeholder="Contact number" data-parsley-trigger="keyup" data-parsley-required="true">
                        </div>
      
                        <div class="row">                
                          <div class="col-md-6">
                            <div class="formrow">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" data-parsley-trigger="keyup" data-parsley-required="true">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="formrow">
                              <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirm Password">
                            </div>
                          </div>
                        </div>

                        <div class="formrow">    
                          <p>By registering, you accept our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and agree with us and our selected partners may contact you with relevant offers and services. You may unsubscribe or update your preferences at anytime through.</p>                    
                        </div>
                        <button type="submit" class="btn">
                            {{ __('Register') }}
                        </button>
                        {{-- <input type="submit" class="btn" value="Register"> --}}
                      </form>
                    </div>

                          {{-- Register Form For Agent --}}
                    
                      <div id="business" class="formpanel tab-pane fade">
                        <form method="POST" action="{{ route('user.user_register') }}" data-parsley-validate>
                          @csrf
                          <input type="hidden" name="user_type" value="2">
                          <div class="row">

                            <div class="col-md-6">
                              <div class="formrow">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First Name *" data-parsley-trigger="keyup" data-parsley-required="true">

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="formrow">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name *" data-parsley-trigger="keyup" data-parsley-required="true">
                              </div>
                            </div>
                          </div>
            
                          <div class="formrow">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email *" data-parsley-trigger="keyup" data-parsley-required="true">
                          </div>
            
                          <div class="row">

                            <div class="col-md-6">
                              <div class="formrow">
                                <select class="form-control" name="register_as" data-parsley-trigger="keyup" data-parsley-required="true">
                                  <option>Register as *</option>
                                  <option value="1">Property Agent</option>
                                  <option value="2">Trade Agent</option>
                                  <option value="3">Hire BusinessHire Tool and Equipment</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6"><div class="formrow">
                              <select class="form-control" name="agent_type" data-parsley-trigger="keyup" data-parsley-required="true">
                                <option>Agent Type *</option>
                                  <option value="1">Letting Agent</option>
                                  <option value="2">Sales Agent</option>
                                  <option value="3">Management Agent</option>
                                  <option value="4">Sales and Letting Agent</option>
                                  <option value="5">Sales, Letting and Management Agent</option>
                                </select>
                              </div>
                            </div>                    
                          </div>                    
                              
                          <div class="row">

                            <div class="col-md-6">
                              <div class="formrow">
                                <select class="form-control" name="b_type" data-parsley-trigger="keyup" data-parsley-required="true">
                                  <option>Business Type *</option>
                                  <option>Company</option>
                                  <option>Branch</option>
                                  <option>Group</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="formrow">
                                <input type="text" name="b_contact_no" class="form-control" placeholder="Business Contact number *" data-parsley-trigger="keyup" data-parsley-required="true">
                              </div>
                            </div>
                          </div>
                            
                          <div class="formrow">

                            <input type="text" name="b_name" class="form-control" placeholder="Business Name *" data-parsley-trigger="keyup" data-parsley-required="true">
                          </div>				
                                  
                          <div class="formrow">

                            <input type="text" name="b_address1" class="form-control" placeholder="Business Address line 1 *" data-parsley-trigger="keyup" data-parsley-required="true">
                          </div>
                              
                          <div class="formrow">

                            <input type="text" name="b_address2" class="form-control" placeholder="Business Address line 2">
                          </div>
                              
                          <div class="formrow">

                            <input type="text" name="b_address3" class="form-control" placeholder="Business Address line 3">
                          </div>
                            
                          <div class="row">

                            <div class="col-md-6">
                              <div class="formrow">
                                <input type="text" name="b_post_code" class="form-control" placeholder="Business Post Code">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="formrow">
                                <select class="form-control" name="b_country" data-parsley-trigger="keyup" data-parsley-required="true">
                                  <option>Business Country *</option>
                                  <option value="1">Pakistan</option>
                                </select>
                              </div>
                            </div>
                          </div>
            
                          <div class="row">                

                            <div class="col-md-6">
                              <div class="formrow">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password *">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="formrow">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password *">
                              </div>
                            </div>
                          </div>				
                        
                          <div class="formrow">    

                            <p>By registering, you accept our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and agree with us and our selected partners may contact you with relevant offers and services. You may unsubscribe or update your preferences at anytime.</p>  
                          </div>
                        
                          <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                          </button>
                        </form>  
                      </div>....
                </div>
                <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="{{route('login')}}">Login Here</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection