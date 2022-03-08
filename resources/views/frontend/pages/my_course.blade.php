@extends('frontend.layouts.app')
@section('content')
    
<section class="page-header-area my-course-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="page-title print-hidden">My Lessons</h1>
          <ul class="print-hidden">
            <li class="active"><a href="/my_courses">Lessons</a></li>
  
  
            {{-- <li class=""><a href="/my_wishlist">Wishlists</a></li>
  
            <li class=""><a href="/my_messages">Messages</a></li>
   --}}
            {{-- <li class=""><a href="/user_profile">Profile</a></li> --}}
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="my-courses-area">
    <div class="container">
    
      <div class="row no-gutters" id="my_courses_area">
        @if (Auth::User()->role == '3')
            

        @foreach ($enrolls as $enroll)
    

        @foreach (App\Models\Course::where('id',$enroll->course_id)->get() as $course)
            
       
        <div class="col-lg-3">
          <div class="course-box-wrap">
            <div class="course-box">
              <a href="/start_lesson/{{$course->id}}">
                <div class="course-image">
                  <img src="{{asset('images/Course/'.$course->thumbnail)}}" alt="" class="img-fluid">
                  <span class="play-btn"></span>
                </div>
              </a>
  
              <div class="" id="course_info_view">
                <div class="course-details">
                  <a href="/start_lesson/{{$course->id}}">
                    <h5 class="title" >{{$course->title}}</h5>

                  </a>
               <a href="#" onclick="document.getElementById('remove{{$course->id}}').submit()"><p style="    color: black;
                font-size: 12px;
                font-weight: bold;
                margin-top: -15px;">Remove From this list</p></a>
                <form action="{{URL::to('course_remove',$course->id)}}" id="remove{{$course->id}}" method="post">@csrf</form>
                </div>
                <div class="row" style="padding: 5px;">
                  <div class="col-md-6">
                    <a href="/course-detail/{{$course->id}}" class="btn" >Lessons detail</a>
                  
                  </div>
                  <div class="col-md-6">
                    <a href="/start_lesson/{{$course->id}}" class="btn" >Start lesson</a>
                  </div>
                </div>
              </div>
  
              <div class="course-details" style="display: none; padding-bottom: 10px;" id="course_rating_view">
                <a href="/course-detail/{{$course->id}}">
                  <h5 class="title">{{$course->title}}</h5>
                </a>
                
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endforeach

        @else
            

        @foreach ($courses as $course)
            
       
        <div class="col-lg-3">
          <div class="course-box-wrap">
            <div class="course-box">
              <a href="/course-detail/{{$course->id}}">
                <div class="course-image">
                  <img src="{{asset('images/Course/'.$course->thumbnail)}}" alt="" class="img-fluid">
                  <span class="play-btn"></span>
                </div>
              </a>
  
              <div class="" id="course_info_view">
                <div class="course-details">
                  <a href="/course-detail/{{$course->id}}">
                    <h5 class="title" >{{$course->title}}</h5>
                  </a>
                  <a href="#" onclick="document.getElementById('remove{{$course->id}}').submit()"><p style="    color: black;
                font-size: 12px;
                font-weight: bold;
                margin-top: -15px;">Remove From this list</p></a>
                <form action="{{URL::to('course_remove',$course->id)}}" id="remove{{$course->id}}" method="post">@csrf</form>
                </div>
                <div class="row" style="padding: 5px;">
                  <div class="col-md-6">
                    <a href="/course-detail/{{$course->id}}" class="btn" >Course detail</a>
                  </div>
                  <div class="col-md-6">
                    <a href="/start_lesson/{{$course->id}}" class="btn" >Start lesson</a>
                  </div>
                </div>
              </div>
  
              <div class="course-details" style="display: none; padding-bottom: 10px;" id="course_rating_view">
                <a href="/course-detail/{{$course->id}}">
                  <h5 class="title">{{$course->title}}</h5>
                </a>
               
              </div>
            </div>
          </div>
        </div>
        @endforeach

        @endif

      </div>
    </div>
  </section>


  <script>
      function editrating(){
          var editbox = document.getElementById("course_rating_view");
          var info = document.getElementById("course_info_view");
        
          editbox.style.display = "block";
          info.style.display = "none";
         
      }

      function cancel(){
          var editbox = document.getElementById("course_rating_view");
          var info = document.getElementById("course_info_view");
        
          editbox.style.display = "none";
          info.style.display = "block";
         
      }
  </script>
@endsection