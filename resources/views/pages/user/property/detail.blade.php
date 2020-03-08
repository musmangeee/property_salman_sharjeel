@extends('layouts.user_layout')

@section('content')

    <!--Page Title Start-->
    <div class="pageTitle">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-heading">{{$property->bed}} bed <b>{{$property->propertyType->name}}</b> house for
                        sale</h1>
                </div>
                <div class="col-md-4">
                    <div class="breadCrumb"><a href="{{route('/')}}">Home</a> / <span>Listing</span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="detailpagewrap">

        <!--detail Block-->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!--Photos-->
                    <div id="photos" class="">
                        <div id="watchVideo" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title">Property Video</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe width="100%" height="500"
                                                src="https://www.youtube.com/embed/JMtS0i9ZQT8" frameborder="0"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="adimages">
                            <div id="adslider" class="flexslider">
                                <ul class="slides">
                                    @foreach($property->image as $image)
                                        <li><a rel="photogallery"
                                               href="{{ asset('../storage/app/public') . '/' . $image->name  }}"
                                               class="image-popup" title="Test">
                                                <div class="imgcaption">{{ asset('../storage/app/public') . '/' . $image->name  }}</div>
                                                <img src="{{ asset('../storage/app/public') . '/' . $image->name  }}"
                                                     alt=""/></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="wideBanner mbt30 mtp30"><img src="images/large-ad.jpg" alt=""></div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    @foreach($property->image as $image)
                                        <li><img src="{{ asset('../storage/app/public') . '/' . $image->name  }}" alt=""/></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="galinfo">
                            <div class="row">
                                <div class="col-md-4"><i class="fa fa-picture-o" aria-hidden="true"></i> {{ sizeof($property->image) }} Photos</div>
                                <div class="col-md-4">
                                    <div class="nmcounter">
                                        <span class="slider-item-current"></span> of <span
                                                class="slider-item-total"></span>
                                    </div>
                                </div>
                                <div class="col-md-4"><a href="javascript:void(0)" data-toggle="modal"
                                                         data-target="#watchVideo"><i class="fa fa-video-camera"
                                                                                      aria-hidden="true"></i> Watch
                                        Video</a>
                                    <a rel="photogallery" href="images/ad-img1.jpg" class="fancybox-effects-a"><i
                                                class="fa fa-arrows-alt" aria-hidden="true"></i> Enlarge</a></div>
                            </div>
                        </div>


                    </div>


                    <div class="featuresWrap">

                        <div class="featuresbox">

                            <div class="wideBanner"><img src="images/large-ad.jpg" alt=""></div>
                            <div class="itemactionbtn">

                                <a href="javascript:void(0)" class="btn" data-toggle="modal"
                                   data-target="#freeValuation"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    Contact</a>

                                <span class="phone"><i class="fa fa-phone" aria-hidden="true"></i>
                @if ($property->User->user_type == 1)
                                        {{$property->User->contact_no}}
                                    @else
                                        {{$property->User->b_contact_no}}
                                    @endif
            </span></div>


                            <h4>Property Key Features</h4>
                            <ul class="featureslist row">
                                <li class="col-lg-6"><span>Lease Expires :</span>
                                    <strong>{{$property->lease_expiry_date}}</strong></li>
                                <li class="col-lg-6"><span>Property type :</span>
                                    <strong>{{$property->propertyType->name}}</strong></li>
                                <li class="col-lg-6"><span>Local Authority :</span>
                                    <strong>{{$property->local_autority}}</strong></li>
                                <li class="col-lg-6"><span>Council tax :</span> <strong>{{$property->tax}}</strong></li>
                                <li class="col-lg-6"><span>Bedroom (s) :</span> <strong>{{$property->bed}}</strong></li>
                                <li class="col-lg-6"><span>Stamp Duty :</span> <strong>{{$property->duty}}</strong></li>
                                <li class="col-lg-6"><span>Property Size :</span>
                                    <strong>{{$property->property_size}}</strong></li>
                                <li class="col-lg-6"><span>Bathroom (s) :</span> <strong>{{$property->bath}}</strong>
                                </li>
                                <li class="col-lg-6"><span>Ground rent :</span>
                                    <strong>{{$property->ground_rent}}</strong></li>
                                <li class="col-lg-6"><span>Reception (s) :</span>
                                    <strong>{{$property->reception}}</strong></li>
                                <li class="col-lg-6"><span>Listed on :</span> <strong>{{$property->created_at}}</strong>
                                </li>
                                <li class="col-lg-6"><span>Last Updated :</span>
                                    <strong>{{$property->created_at->format('d-M-Y')}}</strong></li>
                                <li class="col-lg-6"><span>Basement :</span> <strong>
                                        @if ($property->basement == 1)
                                            <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Days on GetToLet :</span> <strong>201 Days</strong></li>
                                <li class="col-lg-6"><span>Year Build :</span>
                                    <strong>{{$property->created_at->format('Y')}}</strong></li>
                                <li class="col-lg-6"><span>EPC Ratings :</span> <strong>D</strong></li>
                                <li class="col-lg-6"><span>Water Bill Included :</span>
                                    @if ($property->water_bill == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Wood Floors :</span>
                                    @if ($property->wooden_floor == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Swimming Pool :</span>
                                    @if ($property->swimming_pool == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Furnished :</span>
                                    @if ($property->furnished == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Central Heating :</span>
                                    @if ($property->central_heated == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Pet Friendly :</span>
                                    @if ($property->pet == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Parking :</span>
                                    @if ($property->parking == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Balcony :</span>
                                    @if ($property->balcony == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Garden :</span>
                                    @if ($property->garden == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Terrace :</span>
                                    @if ($property->terrace == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>WiFi :</span>
                                    @if ($property->wifi == 1)
                                        <i class="fa fa-check" aria-hidden="true"></i></strong>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true"></i></strong>
                                    @endif
                                </li>
                                <li class="col-lg-6"><span>Listing ID :</span>
                                    <strong>LT{{$property->created_at->format('y')}}-{{rand(10000, 99999)}}</strong>
                                </li>
                            </ul>

                        </div>

                    </div>


                    <!--Details-->
                    <div class="propertyDetail">
                        <h3>Property description</h3>
                        <p>{{$property->property_description}}</p>
                    </div>
                    <!--Details-->
                    <div class="propertyDetail">
                        <h3>Location Information</h3>
                        <p>{{$property->location_description}}</p>
                    </div>

                    <!-- Contact Us -->
                    <div id="contactagent" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$property->User->b_name}}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <div class="formpanel">
                                        <div class="formrow">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="formrow">
                                            <input type="text" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="formrow">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="formrow">
                                            <textarea class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <p>Next, once you are logged in, you can provide a few more details and
                                            conditions of offer.</p>
                                        <input type="submit" class="btn" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!--Ads Block-->

                <div class="col-md-3">
                    <!--Agebt info-->
                    <div class="agentwraper">
                        <div class="agentarea">
                            <h2>Marketed by:</h2>
                            <div class="agentlogo"><a href="#"><img
                                            src="{{URL::asset('property/images/client-img2.jpg') }}"/></a></div>
                            <div class="adtext"><a href="#">{{$property->User->b_name}}</a></div>
                            <div class="adtext"><span>Account Type:</span>
                                @if ($property->User->user_type == 1)
                                    Personel
                                @else
                                    Business
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <div class="agentloc"><i class="fa fa-map-marker"
                                                     aria-hidden="true"></i> {{$property->street}}
                                , {{$property->area_town_city}}, Pakistan
                            </div>
                            <div class="agentitems"><a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#contactagent" aria-hidden="true">Send Email</a>
                            </div>
                            <div class="agentset">or <i class="fa fa-phone" aria-hidden="true"></i>
                                @if ($property->User->user_type == 1)
                                    {{$property->User->contact_no}}
                                @else
                                    {{$property->User->b_contact_no}}
                                @endif
                            </div>
                            <div class="adtext"><a href="#">View all listings</a></div>
                        </div>
                    </div>


                    <!--Useful links-->
                    <div class="prt_nav">
                        <ul class="propertynav">

                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#callback"><i
                                            class="fa fa-reply-all" aria-hidden="true"></i> Request a call back</a></li>
                            <li><a href="report-profile.html"><i class="fa fa-user-o" aria-hidden="true"></i> Report
                                    listing</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Save to favourites</a></li>
                            <li><a href="send-to-friend.html"><i class="fa fa-envelope" aria-hidden="true"></i> Send to
                                    friend </a></li>

                        </ul>
                        <div class="sharelinks rignbarbox">
                            <h3><i class="fa fa-share-alt" aria-hidden="true"></i> Share this listing</h3>
                            <div class="socialicons"><a href="#"><i class="fa fa-facebook-square"
                                                                    aria-hidden="true"></i></a> <a href="#"><i
                                            class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i
                                            class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="#"><i
                                            class="fa fa-envelope-square" aria-hidden="true"></i></a></div>
                        </div>
                    </div>


                    <!--links-->
                    <div class="prt_nav">
                        <!-- Ad -->
                        <div class="sidead"><img src="images/others/160x600.jpg"/></div>

                    </div>


                </div>
            </div>
        </div>
        <!--/detail Block-->

    </div>

    <div class="largebanner shadow3">
        <div class="adin">
            <img src="images/google-ad-wide.jpg" alt="">
        </div>
        <div class="clearfix"></div>
    </div>


@endsection