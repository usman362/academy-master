@extends('frontend.layouts.app')
@section('content')
    
<section class="page-header-area my-course-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="page-title print-hidden">My courses</h1>
          <ul class="print-hidden">
            <li class=""><a href="/my_courses">Courses</a></li>
  
  
            <li class="active"><a href="/my_wishlist">Wishlists</a></li>
  
            <li class=""><a href="/my_messages">Messages</a></li>
  
            <li class=""><a href="/user_profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="my-courses-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="my-course-search-bar">
            <form action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search my courses" onkeyup="getMyWishListsBySearchString(this.value)">
                <div class="input-group-append">
                  <button class="btn" type="button"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row no-gutters" id="my_wishlists_area">
      
      

        @foreach ($wishlists as $wishlist)
        @if ($wishlist->wishlist == 'active')
@foreach (App\Models\Course::where('id',$wishlist->course_id)->get() as $course)
       
<div class="col-lg-3">
    <div class="course-box-wrap">
      <div class="course-box">
        <div class="course-image">
          <a href="/course-detail/{{$course->id}}"><img src="/images/Course/{{$course->thumbnail}}" alt="" style="height: 263px" class="img-fluid"></a>
          <div class="instructor-img-hover">
            @foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                
         
            <a href="/instructor_detail/{{$instructor->id}}"><img src="/images/Login/{{$instructor->image}}" alt=""></a>
            @endforeach
            <span>
              {{$lesson = App\Models\Lesson::where('course_id',$course->id)->count()}} Lessons </span>
            <span>
              @foreach(App\Models\Lesson::where('course_id',$course->id)->get() as $lesson)
                  {{$lesson->mob_duration}}
                Hours
                @endforeach
            </span>
          </div>
          <div class="wishlist-add wishlisted">
            <button type="button" data-toggle="tooltip" data-placement="left" title="" style="cursor : auto;" onclick="document.getElementById('wish_del{{$wishlist->id}}').submit()" id="{{$wishlist->id}}" data-original-title="">
              <i class="fas fa-heart"></i>
            </button>
            <form id="wish_del{{$wishlist->id}}" action="{{URL::to('wishlist_remove',$wishlist->id)}}" method="GET">
              @csrf
            </form>
          </div>
        </div>
        <div class="course-details">
          <a href="/course-detail/{{$course->id}}">
            <h5 class="title">{{$course->title}}</h5>
          </a>
          <p class="instructors">
              @foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                  {{$instructor->name}} {{$instructor->lname}}
              @endforeach
          </p>

        </div>
      </div>
    </div>
  </div>

          @endforeach
        @else
        <p>Your Wishlist is Empty</p>
        @endif

  @endforeach


      </div>
    </div>
  </section>
  <script type="text/javascript">
    function getMyWishListsBySearchString(search_string) {
        $.ajax({
            type : 'POST',
            url : '/my_wishlist',
            data : {search_string : search_string},
            success : function (response) {
                $('#my_wishlists_area').html(response);
            }
        });
    }

    async function handleWishList(elem) {
        try {
            var result = await async_modal();
            if (result) {
                $.ajax({
                    url: '/my_wishlist',
                    type : 'POST',
                    data : {course_id : elem.id},
                    success: function(response)
                    {
                      if ($(elem).hasClass('active')) {
                          $(elem).removeClass('active')
                      }else {
                          $(elem).addClass('active')
                      }
                      $('#wishlist_items').html(response);
                      $.ajax({
                          url: '/my_wishlist',
                          type : 'POST',
                          success: function(response)
                          {
                              $('#my_wishlists_area').html(response);
                          }
                      });
                    }
                });
            }
        } catch (e) {
            console.log("Error occured", e.message);
        }
    }
</script>
@endsection