@extends('layouts.user_layout')

@section('content')
<!--Page Title Start-->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="page-heading">{{$total}} Properties in Pakistan</h1>
            </div>
            <div class="col-md-4">
                <div class="breadCrumb"><a href="{{route('user.user_dashboard')}}">Home</a> / <span>Listing</span></div>
            </div>
        </div>
    </div>
</div>
      
          
          <!--Listing Block-->
<div class="searchlisting">
    <div class="container">
       <div class="row">
            <div class="col-lg-3">
                <div class="sidebar"> 
                    <!-- By Keyword -->
                    <div class="searchsd search">
                        <h4 class="widget-title">Search By Keyword</h4>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Keyword">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                
                    <!-- Purpose -->
                    <div class="searchsd">
                        <h4 class="widget-title">Purpose</h4>
                        <ul class="optionlist">
                            <li>
                            <input type="checkbox" name="checkname" id="buy">
                            <label for="buy"></label> Buy </li>
                            <li>
                            <input type="checkbox" name="checkname" id="rent">
                            <label for="rent"></label> Rent </li>
                        </ul>
                    </div>
                   <!-- Type -->
                    <div class="searchsd">
                        <h4 class="widget-title">Property Type</h4>
                        <select class="form-control">
                            <option>House</option>
                            <option>Plots</option>
                            <option>Commercial</option>
                        </select>
                    </div>
                    <!-- Type end -->
                    <!-- State -->
                    <div class="searchsd">
                        <h4 class="widget-title">Choose State</h4>
                        <select class="form-control">
                            <option>New York</option>
                            <option>Atlanta</option>
                        </select>
                    </div>
                    <!-- State end --> 
                        
                    <!-- City -->
                    <div class="searchsd">
                        <h4 class="widget-title">Choose City</h4>
                        <select class="form-control">
                            <option>New York</option>
                            <option>Atlanta</option>
                        </select>
                    </div>
                    <!-- City end --> 
                
                    <!-- Location -->
                    <div class="searchsd">
                        <h4 class="widget-title">Location</h4>
                        <select class="form-control">
                            <option>Sector A</option>
                            <option>New Town</option>
                        </select>
                    </div>
                    <!-- Location end --> 
              
                    <!-- Area -->
                    <div class="searchsd">
                        <h4 class="widget-title">Area</h4>
                        <div class="row">
                            <div class="col-md-6">
                            <select class="form-control">
                                <option>Any</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control">
                                <option>Any</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- Area end --> 
                
                    <!-- Price -->
                    <div class="searchsd">
                        <h4 class="widget-title">Price Range</h4>
                        <div class="row">
                            <div class="col-md-6">
                            <select class="form-control">
                                <option>From</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control">
                                <option>To</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- Price end --> 
                
                    <!-- Bedrooms -->
                    <div class="searchsd">
                        <h4 class="widget-title">Bedrooms</h4>
                        <select class="form-control">
                            <option>All</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <!-- Bedrooms end --> 
                    
                    <!-- Bathrooms -->
                    <div class="searchsd">
                        <h4 class="widget-title">Bathrooms</h4>
                        <select class="form-control">
                            <option>All</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <!-- Bathrooms end --> 
                    
                    <!-- Features -->
                    <div class="searchsd">
                        <h4 class="widget-title">Features</h4>
                        <select class="form-control">
                            <option>Any</option>
                                <option>Best Match</option>
                            <option>Garden</option>
                            <option>Parking/garage</option>
                            <option>Unfurnished</option>
                            <option>Fireplace</option>
                            <option>Balcony/terrace</option>
                            <option>New Home</option>
                            <option>Retirement Home</option>
                            <option>Shared Ownership</option>
                            <option>Auction Property</option>
                        </select>
                    </div>
                    <!-- Features end --> 
                        
                    <!-- Portion -->
                    <div class="searchsd">
                        <h4 class="widget-title">Portion</h4>
                        <select class="form-control">
                            <option>Any</option>
                            <option>Upper Portion</option>
                            <option>Ground Portion</option>
                        </select>
                    </div>
                    <!-- Portion end --> 
                    
                    <!-- button -->
                    <div class="searchnt">
                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Update Results</button>
                    </div>
                    <!-- button end--> 
                </div>
            </div>
            <div class="col-lg-9">
                <div class="listingwraper">
                    <div class="sortbybar">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="listing.html" data-toggle="tooltip" data-placement="top" title="" class="listby active" data-original-title="Result by List View"><i class="fa fa-th-list" aria-hidden="true"></i></a> <a href="grid.html" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by Gallery View"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            </div>
                      
                            <div class="col-md-4"><span class="hmcount">showing 1 of {{count($property)}} Properties</span></div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <select class="form-control">
                                    <option>Sort by</option>
                                    <option>Best Match</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Price: Reduced</option>
                                    <option>Listed: Newest First</option>
                                    <option>Listed: Oldest First</option>
                                    </select>                 
                                </div>
                            </div> 
                        </div>
                    </div>
                    @foreach ($property as $item)                        
                        <ul class="listinglist">
                            <li>
                                <div class="row">
                                    <div class="col-lg-4">
                                        @if ($item->featured_property == 1)
                                            <div class="ribbon_3 popular"><span>Featured</span></div>
                                        @endif
                                        <div class="mainimage"><a href="detail.html">
                                            @if($item->images == "")
                                                <img src="{{ asset('property/images/' . 'no-image.jpg') }}" height="235px">
                                            @else
                                                <img src="{{ asset('property/images/' . $item->images) }}">
                                            @endif
                                            {{-- <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span></div> --}}
                                            <a href="#" class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" style="color:black; font-weight:bold" aria-hidden="true"></i></a> 
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
                                {{$property->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>


        <!--/Listing Block-->
          
          <div class="largebanner shadow3">
      <div class="adin">
      <img src="images/google-ad-wide.jpg" alt="">
      </div>
      <div class="clearfix"></div>
      </div>    

@endsection