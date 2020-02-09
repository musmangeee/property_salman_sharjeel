@extends('layouts.user_layout')

@section('content')
    
<!--Page Title Start-->
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="page-heading">{{count($totalAgents)}} Property Agents in Pakistan</h1>
        </div>
        <div class="col-md-4">
            <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Agents Listing</span></div>
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
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                    <!-- Location end --> 
            
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
                        <span class="">Showing 1 of {{count($totalAgents)}} Property Agents</span>
                    </div>
                
                    <ul class="listinglist">
                        @foreach ($totalAgents as $agent)    
                            <li>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mainimage"><a href="#"><img src="{{URL::asset('property/images/no-image-user.jpg') }}" alt="" height="215px"></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="listinner">
                                            <h3><a href="{{route('user.agent_listing_detail', $agent->id)}}">{{$agent->b_name}}</a><h3>
                                            <div class="tprop">Total Properties: <strong>{{count(App\PropertyModel::where('created_by', $agent->id)->get())}}</strong></div>
                                            <div class="whatinside">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">
                                                    @if ($agent->b_country === "1")
                                                        Pakistan
                                                    @endif
                                                </a>
                                            </div>
                                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue nibh elit, nec tristique lorem ultrices quis. Nam eu tristique dui, vitae auctor risus.</p> --}}
                                            <div class="postedon">Member Since: {{$agent->created_at->format('Y')}}</div>
                                            <div class="viiewoptions"><a href="{{route('user.agent_listing_detail', $agent->id)}}"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone"><i class="fa fa-phone"></i> Show Number</a> </div>
                                
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                                                    <!-- Contact Us -->
                            <div id="phonenumber" class="modal fade" role="dialog">
                                <div class="modal-dialog"> 
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">                  
                                        <h4 class="modal-title">Agent <b>{{$agent->name}} {{$agent->lname}}</b> Phone Number</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                    
                                            <div class="formpanel">                     
                                                <div class="formrow">                      
                                                    @if ($agent->user_type == 1)   
                                                        <input type="text" class="form-control" placeholder="Phone Number" value="{{$agent->contact_no}}" readonly>                       
                                                    @else
                                                        <input type="text" class="form-control" placeholder="Phone Number" value="{{$agent->b_contact_no}}" readonly>                       
                                                    @endif
                                                </div>
                                                <p>Next, once you are logged in, you can provide a few more details and conditions of offer.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>
            
            <!--Pagination-->
            <div class="pagiWrap">
                 <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$totalAgents->links()}}
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


