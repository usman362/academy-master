<section class="menu-area">
    <div class="container-xl">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <ul class="mobile-header-buttons">
              <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
              <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
            </ul>

            <a href="/" class="navbar-brand" href="#"><img src="{{asset('frontend/uploads/system/logo-dark.png')}}" alt="" height="35"></a>

            <div class="main-nav-wrap">
              <div class="mobile-overlay"></div>

              <ul class="mobile-main-nav">
                <div class="mobile-menu-helper-top"></div>

                <li class="has-children">
                  <a href="">
                    <i class="fas fa-th d-inline"></i>
                    <span>Courses</span>
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
                        <span>All courses</span>
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

            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="/dashboard" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;">Administrator</a>
              </div>
            </div>

          

            <span class="signin-box-move-desktop-helper"></span>
           
          </nav>
        </div>
      </div>
    </div>
  </section>