<!--Header Start-->
<header>
  <div class="logowraper">
    <div class="container">
      <div class="row">
        <div class="col-md-3"><a href="index.html" class="logo"><img src="{{URL::asset('property/images/logo.png') }}" alt="Construction" /></a></div>
        <div class="col-md-9">
          <div class="topLinks">
            @guest
              <a href="{{ route('user.user_pre_login') }}">Login <i class="fa fa-user" aria-hidden="true"></i></a>	  
            @else
              <a class="dropdown-toggle dropdown-toggle-split" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                  @if (Auth::user()->user_type ==1)
                    <a href="{{route('user.user_dashboard')}}" class="dropdown-item">Dashboard</a>
                  @else
                    <a href="{{route('user.agent_dashboard')}}" class="dropdown-item">Dashboard</a>    
                  @endif
                </li>
                <li><a class="dropdown-item" href="{{route('user.property.create')}}">Add Property</a></li>
                {{-- <li><a class="dropdown-item" href="">Saved Properties</a></li> --}}
                <!-- <li><a class="dropdown-item" href="#">FAQ's</a></li>
                <li><a class="dropdown-item" href="#">Testimonials</a></li>
                <li><a class="dropdown-item" href="#">Packages</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
                <li><a class="dropdown-item" href="#">404 Error</a></li>  -->
                <li><a class="dropdown-item" href="{{ route('user.user_logout') }}">Logout</a></li>
              </ul>
            @endguest
			    </div>
          <div class="topcall"> <a href="#">Change Your Country</a> <strong><img src="{{URL::asset('property/images/usa-flag.jpg') }}" alt="usa" />United States</strong> </div>
        </div>
      </div>
    </div>
  </div>
    <!--Nav-->
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{route('/')}}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Buy</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('user.property.sale')}}">Sell</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('user.property.rent')}}">Rent</a></li>
              <li class="nav-item "><a class="nav-link" href="{{route('user.agent_listing')}}">Agents</a></li>
              <li class="nav-item "><a class="nav-link" href="{{route('user.property.index')}}">Property</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('user.about_us')}}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('user.contact_us')}}">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<!--Header End-->