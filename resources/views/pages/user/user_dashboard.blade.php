@extends('layouts.user_layout')

@section('content')
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-heading">Welcome Back {{Auth::user()->name}} {{Auth::user()->lname}}</h1>
      </div>
      <div class="col-md-4">
        <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Dashboard</span></div>
      </div>
    </div>
  </div>
</div>

<div class="innercms">
  <div class="container">
  
	  <div class="row">
		  <div class="col-lg-3">
          <div class="profilebx profilewht">
                    <div class="userprofilewrap">
                        <img src="{{URL::asset('property/images/client-img1.jpg') }}">
                    </div>
            
                    <h2>{{Auth::user()->name}} {{Auth::user()->lname}}</h2>
                  <h3>
                    @if (Auth::user()->user_type == 1)
                    User
                    @endif
                  </h3>
                  <ul class="address">
                    <li><i class="fa fa-phone"></i>{{Auth::user()->contact_no}}</li>
                    <li><i class="fa fa-envelope-o"></i><a href="#">{{Auth::user()->email}}</a></li>
                    <li><i class="fa fa-map-marker"></i>{{Auth::user()->city}}, Pakistan</li>
                    <li><i class="fa fa-globe"></i><a href="#">{{Auth::user()->website}}</a></li>
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
                        
         @include('partials.user.user_dashboard_sidebar')
                    
                    
        </div>
		  
		  
	  	<div class="col-lg-9">
			
			<ul class="row profilestat">
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
                    <h6>10</h6>
                    <strong>Profile Views</strong> </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-home" aria-hidden="true"></i>
                    <h6>{{$activeProperties}}</h6>
                    <strong>Active Properties</strong> </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h6>{{$inactiveProperties}}</h6>
                    <strong>Expire Properties</strong> </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="inbox"> <i class="fa fa-users" aria-hidden="true"></i>
                    <h6>21</h6>
                    <strong>Clients</strong> </div>
                </li>
            </ul>
			
			<div class="statepgdt">
        <h2 class="maintitle">Your Recent Properties</h2>
        @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
            @endif
			
        @foreach ($recentProperty as $item)                        
              <ul class="listinglist">
                  <li>
                      <div class="row">
                          <div class="col-lg-4">
                              @if ($item->featured_property == 1)
                                  <div class="ribbon_3 popular"><span>Featured</span></div>
                              @endif
                              <div class="mainimage"><a href="#">
                                  @if($item->images == "")
                                      <img src="{{ asset('property/images/' . 'no-image.jpg') }}" height="235px">
                                  @else
                                      <img src="{{ asset('property/images/' . $item->images) }}">
                                  @endif
                                  {{-- <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span></div> --}}
                                  <form action="{{route('user.property.saved.store')}}" method="post">
                                  @csrf
                                      <input type="hidden" name="property_id" value="{{$item->id}}">
                                      <button class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" style="color:black; font-weight:bold" aria-hidden="true"></i></button>
                                  </form>
                                    
                              </div>
                          </div>
                          <div class="col-lg-8">
                              <div class="listinner">
                                  <h2><a href="{{route('user.property.show', $item->id)}}">{{$item->bed}} bed <b>{{$item->propertyType->name}}</b> house for sale</a></h2>
                                  <div class="price">{{number_format($item->rent_amount)}} Rs.</div>
                                  <ul class="options">
                                      <li>
                                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>{{$item->bed}}</strong> </div>
                                      </li>
                                      <li>
                                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>{{$item->bath}}</strong> </div>
                                      </li>
                                      <li>
                                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>{{$item->parking_no}}</strong> </div>
                                      </li>
                                      <li>
                                      <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>{{$item->property_size}}{{$item->Unit->name}}</strong> </div>
                                      </li>
                                  </ul>  
                                  <div class="whatinside">
                                      <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="">{{$item->street}}, {{$item->area_town_city}}, Pakistan</a>
                                  </div>
                              <div class="postedon">Listed on {{$item->created_at->format('d-M-Y')}} by <a href="{{route('user.agent_listing_detail', $item->User->id)}}">{{$item->User->name}} {{$item->User->lname}}</a></div>

                                  <div class="viiewoptions"><a href="{{route('user.property.show', $item->id)}}"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone" data-toggle="modal" data-target="#phonenumber" aria-hidden="true"><i class="fa fa-phone"></i> Show Number</a> </div>
                      
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>

              <!-- Contact Us -->
              <div id="phonenumber" class="modal fade" role="dialog">
                  <div class="modal-dialog"> 
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">                  
                          <h4 class="modal-title">Agent <b>{{$item->User->name}} {{$item->User->lname}}</b> Phone Number</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                      
                              <div class="formpanel">                     
                                  <div class="formrow">                      
                                      @if ($item->User->user_type == 1)   
                                          <input type="text" class="form-control" placeholder="Phone Number" value="{{$item->User->contact_no}}" readonly>                       
                                      @else
                                          <input type="text" class="form-control" placeholder="Phone Number" value="{{$item->User->b_contact_no}}" readonly>                       
                                      @endif
                                  </div>
                                  <p>Next, once you are logged in, you can provide a few more details and conditions of offer.</p>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
            <!--Pagination-->
          <div class="pagiWrap">
              <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                      {{$recentProperty->links()}}
                  </ul>
              </nav>
          </div>
			</div>			
			
		  </div>
	  </div>
	  
  </div>
</div>
@endsection