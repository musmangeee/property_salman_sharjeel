@extends('layouts.user_layout')

@section('content')

<div class="agencyWraper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="agentimg"><img src="images/agencies/01.jpg" alt=""></div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <h2>Alistair Stevens, OL9</h2>
                    <div class="callagen"><i class="fa fa-phone" aria-hidden="true"></i> +44 161 506 9911</div>
                    <div class="agentrating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> 519 Middleton Road, Oldham, OL9 9SH</div>                        
                    <ul class="list-inline social">
                <li> <a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li> <a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li> <a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li> <a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>
                <li> <a href="javascript:void(0);"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                <li> <a href="javascript:void(0);"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
              </ul>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <div class="agenc_btn58">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#contactagent" aria-hidden="true" class="btn">Contact Us</a>
                    <br>
                    <a href="#">Visit Alistair Stevens's website</a>
                    </div>
                </div>
                
              
            </div>
        </div>
        
    </div>

<!-- Contact Us -->
      <div id="contactagent" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">                  
              <h4 class="modal-title">Contact Haider Associates & Builders</h4>
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
                  <p>Next, once you are logged in, you can provide a few more details and conditions of offer.</p>
                  <input type="submit" class="btn" value="Submit">
                </div>
              
            </div>
          </div>
        </div>
      </div>

<div class="searchlisting">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="aboutagency">
          <h3>About Agency</h3>
      
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit pulvinar mattis. In hac habitasse platea dictumst. Cras pretium id leo eget consequat. Sed massa quam, aliquam sit amet sem non, dignissim aliquam nibh. In hac habitasse platea dictumst. Vestibulum vel semper augue, id scelerisque nisi. Integer sapien ex, laoreet et cursus vitae, tempor sed lectus. Mauris sodales laoreet metus non dapibus. Etiam non interdum mi, a laoreet diam. Fusce est elit, posuere at convallis sed, sagittis eleifend arcu. Suspendisse dignissim neque non leo viverra, nec lobortis massa sagittis. Nulla at libero eget augue tincidunt viverra eu nec lectus. Aliquam id lorem tristique, dapibus nisl vitae, rutrum diam. Nullam tempor rutrum tellus sit amet elementum. Morbi aliquam libero ut neque dapibus aliquam.</p>
        
        <h3>Properties Detail</h3>
        <ul>
        <li>For Rent: <a href="#">105 Properties</a></li>
        </ul>
        <ul>
        <li>For Sell: <a href="#">105 Properties</a></li>
        </ul>
      </div>
                
                <div class="agenmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1067868.3657338826!2d-0.44345310495479257!3d51.56262414057514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2s!4v1511290553449" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>
                
            </div>
            <div class="col-lg-7">
                <div class="statepgdt">
                <h2 class="maintitle">Recent Properties by Haider Associates & Builders</h2>
                <ul class="listinglist">
        <li>
          <div class="row">
            <div class="col-lg-4">
              <div class="ribbon_3 popular"><span>Featured</span></div>
              <div class="mainimage"><a href="detail.html"><img src="images/property/thumb-01.jpg" alt="">
                <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span> </div>
                <a href="#" class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" aria-hidden="true"></i></a> </div>
            </div>
            <div class="col-lg-8">
              <div class="listinner">
                <h2><a href="detail.html">7 bed semi-detached house for sale</a></h2>
                <div class="price">$5,000</div>
                 
                  <ul class="options">
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
              </li>
            </ul>
                  
            
                  
                <div class="postedon">Listed on 2nd May 2019 by <a href="#">Jhon Doe</a></div>
                
                
                <div class="viiewoptions"><a href="detail.html"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone"><i class="fa fa-phone"></i> Show Number</a> </div>
                
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </li>
             <li>
          <div class="row">
            <div class="col-lg-4">
              <div class="ribbon_3 popular"><span>Featured</span></div>
              <div class="mainimage"><a href="detail.html"><img src="images/property/thumb-01.jpg" alt="">
                <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span> </div>
                <a href="#" class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" aria-hidden="true"></i></a> </div>
            </div>
            <div class="col-lg-8">
              <div class="listinner">
                <h2><a href="detail.html">7 bed semi-detached house for sale</a></h2>
                <div class="price">$5,000</div>
                 
                  <ul class="options">
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
              </li>
            </ul>
                  
            
                  
                <div class="postedon">Listed on 2nd May 2019 by <a href="#">Jhon Doe</a></div>
                
                
                <div class="viiewoptions"><a href="detail.html"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone"><i class="fa fa-phone"></i> Show Number</a> </div>
                
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </li>
                  <li>
          <div class="row">
            <div class="col-lg-4">
              <div class="ribbon_3 popular"><span>Featured</span></div>
              <div class="mainimage"><a href="detail.html"><img src="images/property/thumb-01.jpg" alt="">
                <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span> </div>
                <a href="#" class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" aria-hidden="true"></i></a> </div>
            </div>
            <div class="col-lg-8">
              <div class="listinner">
                <h2><a href="detail.html">7 bed semi-detached house for sale</a></h2>
                <div class="price">$5,000</div>
                 
                  <ul class="options">
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
              </li>
            </ul>
                  
            
                  
                <div class="postedon">Listed on 2nd May 2019 by <a href="#">Jhon Doe</a></div>
                
                
                <div class="viiewoptions"><a href="detail.html"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone"><i class="fa fa-phone"></i> Show Number</a> </div>
                
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </li>
                       <li>
          <div class="row">
            <div class="col-lg-4">
              <div class="ribbon_3 popular"><span>Featured</span></div>
              <div class="mainimage"><a href="detail.html"><img src="images/property/thumb-01.jpg" alt="">
                <div class="imgcounter"> <span><i class="fa fa-picture-o" aria-hidden="true"></i> 10</span> <span><i class="fa fa-video-camera" aria-hidden="true"></i> 1</span> </div>
                <a href="#" class="favico slct" data-toggle="tooltip" data-placement="top" title="Save Property"><i class="fa fa-heart-o" aria-hidden="true"></i></a> </div>
            </div>
            <div class="col-lg-8">
              <div class="listinner">
                <h2><a href="detail.html">7 bed semi-detached house for sale</a></h2>
                <div class="price">$5,000</div>
                 
                  <ul class="options">
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bedrooms"> <i class="fa fa-bed" aria-hidden="true"></i> <strong>6</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bathrooms"> <i class="fa fa-bath" aria-hidden="true"></i> <strong>4</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Garage"> <i class="fa fa-car" aria-hidden="true"></i> <strong>1</strong> </div>
              </li>
              <li>
                <div class="into" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Area"> <i class="fa fa-clone" aria-hidden="true"></i> <strong>54m</strong> </div>
              </li>
            </ul>
                  
            
                  
                <div class="postedon">Listed on 2nd May 2019 by <a href="#">Jhon Doe</a></div>
                
                
                <div class="viiewoptions"><a href="detail.html"><i class="fa fa-external-link-square"></i> View Details</a>  <a href="#." class="phone"><i class="fa fa-phone"></i> Show Number</a> </div>
                
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="largebanner shadow3">
<div class="adin">
<img src="images/google-ad-wide.jpg" alt="">
</div>
<div class="clearfix"></div>
</div>


@endsection