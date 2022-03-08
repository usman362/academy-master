<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a href="/dashboard" class="topnav-logo" style = "min-width: unset;">
            <span class="topnav-logo-lg">
                <img src="{{asset('backend/image/logo-light.png')}}" alt="" height="40">
            </span>
            <span class="topnav-logo-sm">
                <img src="{{asset('backend/image/logo-light-sm.png')}}" alt="" height="40">
            </span>
        </a>

        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            @if (Auth::User()->role == '2')
            {{-- <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-view-apps noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0 mt-5 border-top-0" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-278px, 70px, 0px);">

                    <div class="rounded-top py-3 border-bottom bg-primary">
                        <h4 class="text-center text-white">Quick actions</h4>
                    </div>

                    <div class="row row-paddingless" style="padding-left: 15px; padding-right: 15px;">
                        <!--begin:Item-->
                        <div class="col-6 p-0 border-bottom border-right">
                            <a href="/Course/create" class="d-block text-center py-3 bg-hover-light" >
                                <i class="dripicons-archive text-20"></i>
                                <span class="w-100 d-block text-muted">Add course</span>
                            </a>
                        </div>

                        <div class="col-6 p-0 border-bottom">
                            <a href="/Course/create" class="d-block text-center py-3 bg-hover-light" >
                                <i class="dripicons-media-next text-20"></i>
                                <span class="d-block text-muted">Add lesson</span>
                            </a>
                        </div>

                    </div>
                </div>
            </li> --}}
            @else
                
            @endif
         
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{asset('images/Login/'.Auth::User()->image)}}" alt="user-image" class="rounded-circle">
                </span>
                <span  style="color: #fff;">
                                        <span class="account-user-name">{{Auth::User()->name}} {{Auth::User()->lname}}</span>
                    <span class="account-position">
@if (Auth::User()->role == '1')
    Admin
@elseif (Auth::User()->role == '2')
    Instructor
@else 
Student
@endif

                    </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
            aria-labelledby="topbar-userdrop">
            <!-- item-->
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
            </div>

            <!-- Account -->
            {{-- <a href="/user_profile" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle mr-1"></i>
                <span>My account</span>
            </a> --}}

              
            <!-- Logout-->
            <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout mr-1"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
           
        </div>
    </li>
</ul>
<a class="button-menu-mobile disable-btn">
    <div class="lines">
        <span></span>
        <span></span>
        <span></span>
    </div>
</a>
<div class="visit_website">
    <h4 style="color: #fff; float: left;"> Academy</h4>
    <a href="/" target="" class="btn btn-outline-light ml-3">Visit website</a>
</div>
</div>
</div>