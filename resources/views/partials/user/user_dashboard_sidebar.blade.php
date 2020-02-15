 <ul class="usernavdash">

    <li class="active">
        @if (Auth::user()->user_type ==1)
            <a href="{{route('user.user_dashboard')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
        @else
            <a href="{{route('user.agent_dashboard')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>    
        @endif
    </li>
    <li>
        @if(Auth::user()->user_type == 1)
            <a href="{{route('user.user_profile', Auth::user()->id)}}"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile </a>
        @else    
            <a href="{{route('user.agent_profile', Auth::user()->id)}}"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile </a>
        @endif
    
    </li>
    <li>
        @if(Auth::user()->user_type == 1)
            <a href="{{route('user.user_profile_view', Auth::user()->id)}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> View My Profile </a>
        @else    
            <a href="{{route('user.agent_profile_view', Auth::user()->id)}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> View My Profile </a>
        @endif
    </li>
    <li>
        @if(Auth::user()->user_type == 1)
            <a href="{{route('user.my.property', Auth::user()->id)}}"><i class="fa fa-certificate" aria-hidden="true"></i> My Properties </a>
        @else    
            <a href="{{route('user.myagent.property', Auth::user()->id)}}"><i class="fa fa-certificate" aria-hidden="true"></i> My Properties </a>
        @endif
    </li>
    <li>
        @if(Auth::user()->user_type == 1)
            <a href="{{route('user.expire.property', Auth::user()->id)}}"><i class="fa fa-certificate" aria-hidden="true"></i> Expired Properties</a></li>
        @else
            <a href="{{route('user.expireagent.property', Auth::user()->id)}}"><i class="fa fa-certificate" aria-hidden="true"></i> Expired Properties</a></li>
        @endif
        
    <li><a href="{{route('user.property.saved')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> My Favourites Properties</a></li>
    <li><a href=""><i class="fa fa-check" aria-hidden="true"></i> Packages</a>  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></li>
    <li><a href=""><i class="fa fa-calendar-o" aria-hidden="true"></i> Property Alerts</a></li>
    <li><a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> Reviews</a></li>
    <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></li>
    <li><a href="{{ route('user.user_logout') }}">Logout</a></li>

</ul>             