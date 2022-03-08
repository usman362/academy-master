@extends('frontend.layouts.app')
@section('content')
    
<section class="category-header-area">
    <div class="container-lg">
      <div class="row">
        <div class="col">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item">
                <a href="#">
                  Courses </a>
              </li>
              <li class="breadcrumb-item active">
                All category </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>


  <section class="category-course-list-area">
    <div class="container">
      <div class="category-filter-box filter-box clearfix">
     
       
        <a href="" style="float: right; font-size: 19px; margin-right: 5px;"><i class="fas fa-sync-alt"></i></a>
      </div>
      <div class="row">
     

        <div class="col-lg-12">
          <div class="category-course-list">
            <ul>
                @foreach ($courses as $course)
                    
               
              <li>
                <div class="course-box-2">
                  <div class="course-image">
                    <a href="/course-detail/{{$course->id}}">
                      <img src="{{asset('images/Course/'.$course->thumbnail)}}" alt="" class="img-fluid">
                      <style>
                          .img-fluid{
                              height: 146px !important;
                          }
                      </style>
                    </a>
                  </div>
                  <div class="course-details">
                    <a href="/course-detail/{{$course->id}}" class="course-title">{{$course->title}}</a>
                    @foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                    <a href="/instructor_detail/{{$instructor->id}}" class="course-instructor">
                      <span class="instructor-name">
                       
                        {{$instructor->name}}
                       
                    </span>
                    </a>
                    @endforeach  
                    <div class="course-subtitle">
                     {{$course->short_desc}} </div>
                     
                    <div class="course-meta">
                      <span class=""><i class="fas fa-play-circle"></i>
                        {{$lessons->count()}} Lessons </span>
                     
                      <span class=""><i class="fas fa-closed-captioning"></i>{{$course->language}}</span>
                      <span class=""><i class="fa fa-level-up"></i>{{$course->level}}</span>
                      <span class=""><i class="fa fa-level-up"></i>{{$course->category}}</span>
                    </div>
                  </div>
                 
                </div>
              </li>
              @endforeach
            </ul>
          </div>

         
          <nav>
              
            <ul class="pagination justify-content-center">
                {{$courses->links()}}
             
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

@endsection