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
        <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Profile</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="innercms">
    <div class="container">  
	    <div class="row">
		    <div class="col-lg-3">
                @include('partials.user.user_dashboard_sidebar') 
            </div>
	  	    <div class="col-lg-9">
                <form action="{{route('user.user_profile.update', $profile->id)}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif
                    <div class="userccount grybg">
                        <h4 class="modal-title">Your Profile</h4>
                        <h5>Personal Detail</h5>
                        <div class="formpanel">
                            <div class="formrow">
                                <label>Country of Residence *</label>
                                <select class="form-control" name="b_country" data-parsley-trigger="keyup" data-parsley-required="true" readonly>
                                    @if ($profile->b_country == 1)
                                        <option value="{{$profile->b_country}}">Pakistan</option>
                                    @endif
                                    
                                </select>
                            </div>

                            <div class="formrow">
                                <label>Account Type</label>
                                <select class="form-control" name="user_type" readonly blo>
                                    @if($profile->user_type == 1)
                                        <option value="1">Individual</option>
                                    @else
                                        <option value="2">Agent</option>
                                    @endif
                                    </option>
                                    
                                </select>
                            </div>

                            <div class="formrow">
                                <label>Title</label>
                                <select class="form-control" name="title" readonly>
                                    <option value="{{$profile->title}}">{{$profile->title}}</option>
                                    
                                </select>
                            </div>
                             <div class="row">
                              <div class="col-md-12">
                                <div class="formrow">
                                        <label>Business Name *</label>
                                        <input type="text" class="form-control" readonly name="b_name" value="{{$profile->b_name}}" placeholder="Enter Business Name" data-parsley-trigger="keyup" data-parsley-required="true">
                                    </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{$profile->name}}" placeholder="Enter First Name" data-parsley-trigger="keyup" data-parsley-required="true" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" name="lname" value="{{$profile->lname}}" placeholder="Enter Last Name" data-parsley-trigger="keyup" data-parsley-required="true"readonly>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Gendar</label>
                                        <select class="form-control" name="gender" readonly>
                                            @if ($profile->gender == 1)
                                            <option value="{{$profile->gender}}">Male</option>
                                            @else
                                            <option value="{{$profile->gender}}">Female</option>
                                            @endif
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Year of Birth</label>
                                        <input type="date" name="dob" id="" value="{{$profile->dob}}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>                

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>My Mobile Number *</label>
                                        <input type="text" class="form-control" value="{{$profile->contact_no}}" name="contact_no" placeholder="Enter Mobile Number" data-parsley-trigger="keyup" data-parsley-required="true" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>My Landline Number</label>
                                        <input type="text" class="form-control" name="landline_no" value="{{$profile->landline_no}}" placeholder="Enter Landline Number" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>My WhatsApp Number</label>
                                        <input type="text" class="form-control" name="whatsapp_no" value="{{$profile->whatsapp_no}}" placeholder="Enter Your WhatsApp Number" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>My Skype ID</label>
                                        <input type="text" class="form-control" name="skype_id" value="{{$profile->skype_id}}" placeholder="Enter Your Skype ID" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="formrow">
                                <label>My Website (if any)</label>
                                <input type="text" class="form-control" name="website" value="{{$profile->website}}" placeholder="Enter Your Website Address" readonly>
                            </div>

                            <div class="formrow">
                                <label>My Email Address</label>
                                <input type="text" class="form-control" name="email" value="{{$profile->email}}" placeholder="Enter Your Email Address" readonly>
                            </div>
                    
                            <hr>
                            <h5>Address</h5>
                            <div class="formrow">
                                <label>Primary Address</label>
                                <input type="text" class="form-control" name="b_address1" value="{{$profile->b_address1}}" placeholder="Address Line 1" readonly>
                            </div>
                            <div class="formrow">
                                <input type="text" class="form-control" name="b_address2" value="{{$profile->b_address2}}" placeholder="Address Line 2" readonly>
                            </div>

                            <div class="formrow">
                                <label>State / Province</label>
                                <input type="text" class="form-control" name="state" placeholder="State / Province" value="{{$profile->state}}" readonly>
                            </div>

                            <div class="formrow">
                                <label>City *</label>
                                <input type="text" name="city" class="form-control" id="" placeholder="City" data-parsley-trigger="keyup" data-parsley-required="true" value="{{$profile->city}}" readonly>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="formrow">
                                        <label>Area / Town</label>
                                        <input type="text" class="form-control" name="area_town" value="{{$profile->area_town}}" placeholder="Enter City Area / Town" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="formrow">
                                        <label>Postcode</label>
                                        <input type="text" class="form-control" name="b_post_code" value="{{$profile->b_post_code}}" placeholder="Postcode" readonly>
                                    </div>
                                </div>
                            </div>

                            {{-- <input type="submit" class="btn" value="Update"> --}}
                        </div>
                    </div>
                </form>
		    </div>
	    </div>
    </div>
</div>    
@endsection