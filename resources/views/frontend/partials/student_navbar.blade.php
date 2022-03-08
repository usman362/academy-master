<section class="menu-area">
    <div class="container-xl">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
            <ul class="mobile-header-buttons">
              <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
              <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
            </ul>
  
            <a href="/" class="navbar-brand">
              <img src="{{asset('frontend/uploads/system/logo-dark.png')}}" alt="" height="35">
            </a>
  
            <div class="main-nav-wrap">
                <div class="mobile-overlay"></div>
  
                <ul class="mobile-main-nav">
                  <div class="mobile-menu-helper-top"></div>
  
                  <li class="has-children">
                    <a href="">
                      <i class="fas fa-th d-inline"></i>
                      <span>Lessons</span>
                      <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                    </a>
  
                    <ul class="category corner-triangle top-left is-hidden pb-0">
                      <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
  
                      <li class="">
                        <a href="#" class="py-2">
                          <span class="icon"><i class="fas fa-assistive-listening-systems"></i></span>
                          <span>Listening</span>
                          <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                        </a>
                        <ul class="sub-category is-hidden">
                          <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                          <li class="go-back"><a href="">
                              <i class="fas fa-angle-left"></i>
                              <span class="icon"><i class="fas fa-assistive-listening-systems"></i></span>
                              Listening </a></li>
                         @foreach (App\Models\Course::where('category','Listening')->get() as $listening)
                             
                        
                              <li><a href="/course-detail/{{$listening->id}}">{{$listening->title}}</a></li>
                              @endforeach
                        </ul>
                      </li>
  
                      <li class="">
                        <a href="#" class="py-2">
                          <span class="icon"><i class="fas fa-volume-up"></i></span>
                          <span>Speaking</span>
                          <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                        </a>
                        <ul class="sub-category is-hidden">
                          <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                          <li class="go-back"><a href="">
                              <i class="fas fa-angle-left"></i>
                              <span class="icon"><i class="fas fa-volume-up"></i></span>
                              Speaking</a></li>
                              @foreach (App\Models\Course::where('category','Speaking')->get() as $speaking)
                             
                        
                              <li><a href="/course-detail/{{$speaking->id}}">{{$speaking->title}}</a></li>
                              @endforeach
                        </ul>
                      </li>
  
                      <li class="all-category-devided mb-0 p-0">
                        <a href="/all_course" class="py-3">
                          <span class="icon"><i class="fa fa-align-justify"></i></span>
                          <span>All lessons</span>
                        </a>
                      </li>
  
                    </ul>
                  </li>
  
                  <div class="mobile-menu-helper-bottom"></div>
                </ul>
              </div>
  
  
              <form class="inline-form" action="{{URL::to('search_query')}}" method="POST" style="width: 100%;">
                @csrf
                <div class="input-group">
                  <input type="text" name='query' class="form-control" placeholder="Search for courses">
                  <div class="input-group-append">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
  
            @if (Auth::User()->role == '3')
                
            @else
                
          
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="/dashboard" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;">Instructor</a>
              </div>
            </div>
            @endif
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="/my_courses" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0; min-width: 100px;">My Lessons</a>
              </div>
            </div>
  
            {{-- <div class="wishlist-box menu-icon-box" id="wishlist_items">
              <div class="icon">
                <a href=""><i class="far fa-heart"></i></a>
                <span class="number">{{$wishlist = App\Wishlist::where('student_id',Auth::User()->id)->count()}}</span>
              </div>
              <div class="dropdown course-list-dropdown corner-triangle top-right">
                <div class="list-wrapper">
                  <div class="item-list">
                    <ul>
                        @foreach (App\Wishlist::where('student_id',Auth::User()->id)->get() as $item)
                            @if ($item->wishlist == 'active')
        @foreach (App\Course::where('id',$item->course_id)->get() as $course)
                            <li>
        
                                <div class="item clearfix">
                                  <div class="item-image">
                                    <a href="">
                                      <img src="/images/Course/{{$course->thumbnail}}" alt="" style="height: auto !important" class="img-fluid">
                                    </a>
                                  </div>
                                  <div class="item-details">
                                    <a href="/images/Course/{{$course->thumbnail}}">
                                      <div class="course-name">{{$course->title}}</div>
                                      <div class="instructor-name">
                                        By @foreach (App\User::where('id',$course->instructor)->get() as $instructor)
                                            {{$instructor->name}} {{$instructor->lname}}
                                        @endforeach 
                                        </div>
                                    </a>
                                  </div>
                                </div>
                              </li>
                              @endforeach
                            @else
                                
                            @endif
                    
                      @endforeach
                    </ul>
                  </div>
                  <div class="dropdown-footer">
                    <a href="/my_wishlist">Go to wishlist</a>
                  </div>
                </div>
                <div class="empty-box text-center d-none">
                  <p>Your wishlist is empty.</p>
                  <a href="">Explore courses</a>
                </div>
              </div>
            </div>
   --}}
            
  
            <div class="user-box menu-icon-box">
              <div class="icon">
                <a href="javascript::">
                  <img src="/images/Login/{{$student = Auth::User()->image}}" alt="" style="height: auto !important" class="img-fluid">
                </a>
              </div>
              <div class="dropdown user-dropdown corner-triangle top-right">
                <ul class="user-dropdown-menu">
                  <li class="dropdown-user-info">
                    <a href="#">
                      <div class="clearfix">
                        <div class="user-image float-left">
                          <img src="/images/Login/{{Auth::User()->image}}" alt="">
                        </div>
                        <div class="user-details">
                          <div class="user-name">
                            <span class="hi">Hi,</span>
                            {{Auth::User()->name}} {{Auth::User()->lname}}
                          </div>
                          <div class="user-email">
                            <span class="email">{{Auth::User()->email}}</span>
                            <span class="welcome">Welcome back</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
  
  
  
  
  
                  <li class="user-dropdown-menu-item"><a href="/Chat"><i class="far fa-gem"></i>Chat Room</a></li>

                  {{-- <li class="user-dropdown-menu-item"><a href="/user_profile"><i class="fas fa-user"></i>User profile</a></li> --}}
                  <li class="dropdown-user-logout user-dropdown-menu-item"><a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log out</a></li>
                 
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </ul>
              </div>
            </div>
  
  
  
            <span class="signin-box-move-desktop-helper"></span>
            <div class="sign-in-box btn-group d-none">
  
              <button type="button" class="btn btn-sign-in" data-toggle="modal" data-target="#signInModal">Log In</button>
  
              <button type="button" class="btn btn-sign-up" data-toggle="modal" data-target="#signUpModal">Sign Up</button>
  
            </div>
            <!--  sign-in-box end -->
  
  
          </nav>
        </div>
      </div>
    </div>
  </section>