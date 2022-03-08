@extends('frontend.layouts.app')
@section('content')
    
<section class="course-header-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <div class="course-header-wrap">
            <h1 class="title">{{$course->title}}</h1>
            <p class="subtitle">{{$course->short_desc}}</p>
            <div class="rating-row">
              <span class="course-badge best-seller">{{$course->level}}</span>
              <span class="enrolled-num">
                {{$enrolls->count()}} Students enrolled </span>
            </div>
            <div class="created-row">
              <span class="created-by">
                  @foreach ($instructors as $instructor)
                  Created by <a href="#">{{$instructor->name}} {{$instructor->lname}}</a>
                  @endforeach
               
              </span>
              <span class="last-updated-date">Last updated {{$course->updated_at->format('D')}}, {{$course->updated_at->format('m/d/Y')}}</span>
              <span class="comment"><i class="fas fa-comment"></i>{{$course->language}}</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
  
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="course-content-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
  
        
          <br>
          <div class="course-curriculum-box">
            <div class="course-curriculum-title clearfix">
              <div class="title float-left">Curriculum for this Lessons</div>
              <div class="float-right">
                <span class="total-lectures">
                  {{$lessons->count()}} Lessons </span>
                <span class="total-time">
                   {{-- @foreach ($lessons as $lesson)
                       
                  
                    {{$lesson->mob_duration}} 
                    @endforeach --}}
                  <?php echo App\Models\Lesson::where('course_id',$course->id)->sum(DB::raw("mob_duration")); ?>
                </span>
              </div>
            </div>
            <div class="course-curriculum-accordion">
              <div class="lecture-group-wrapper">
                @if ($lessons != null)
                <div class="lecture-group-title clearfix" data-toggle="collapse" data-target="#collapse11" aria-expanded="true">
                  <div class="title float-left">
                    {{$course->title}} </div>
                  <div class="float-right">
                    <span class="total-lectures">
                      {{$lessons->count()}} Lessons </span>
                    {{-- <span class="total-time">
                      {{$lessons->id->count()}} </span> --}}
                  </div>
                </div>
             
               
  
                <div id="collapse11" class="lecture-list collapse show">
                  <ul>
                      @foreach ($lessons as $lesson) 
                    <li class="lecture has-preview">
                      <span class="lecture-title">{{$lesson->title}}</span>
                      <span class="lecture-time float-right">{{$lesson->mob_duration}}</span>
                      <!-- <span class="lecture-preview float-right" data-toggle="modal" data-target="#CoursePreviewModal">Preview</span> -->
                    </li>
                    @endforeach
                  </ul>
                </div>
                
                @else
                <h5>There is no Lesson in these Course</h5>
                @endif
              </div>

            </div>
          </div>
          <div class="requirements-box">
            <div class="requirements-title">Requirements</div>
            <div class="requirements-content">
              <ul class="requirements__list">
              
                   
                   
                    
                    @if ($requirements != null)

                    @foreach ($requirements as $requirement)
                    <li>{{$requirement->requirments}}</li>
                    @endforeach
                    @else
                        <p>No Requirements</p>
                    @endif
                    
                   
                 
                  

               
                
              </ul>
            </div>
          </div>
          <div class="description-box view-more-parent">
            <div class="view-more" onclick="viewMore(this,'hide')">+ View more</div>
            <div class="description-title">Description</div>
            <div class="description-content-wrap">
              <div class="description-content">
                <?php $description = $course->desc ?>
                <?php $description=str_replace("<p>&nbsp;</p>","", $description); echo str_replace("<p><br></p>","", $description);?>
              </div>
            </div>
          </div>
  
  
          <div class="compare-box view-more-parent">
            <div class="view-more" onclick="viewMore(this)">+ View more</div>
            <div class="compare-title">Other related Lessons</div>
            <div class="compare-courses-wrap">
            </div>
          </div>
  @foreach ($instructors as $instructor)
      
  
          <div class="about-instructor-box">
            <div class="about-instructor-title">
              About the instructor </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="about-instructor-image">
                  <img src="/public/images/Login/{{$instructor->image}}" alt="" class="img-fluid">
                  <ul>
                    <!-- <li><i class="fas fa-star"></i><b>4.4</b> Average Rating</li> -->
                    
                    <li><i class="fas fa-user"></i><b>
                        {{$enroll = App\Models\Enroll::where('instructor_id',$instructor->id)->count()}} </b> Students</li>
                    <li><i class="fas fa-play-circle"></i><b>
                        {{$ins_course->count()}} </b> Lessons</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="about-instructor-details view-more-parent">
                  <div class="view-more" onclick="viewMore(this)">+ View more</div>
                  <div class="instructor-name">
                    <a href="#">{{$instructor->name}} {{$instructor->lname}}</a>
                  </div>
                  <div class="instructor-title">
                     </div>
                  <div class="instructor-bio">
                    <?php $description = $instructor->biography ?>
                    <?php $description=str_replace("<p>&nbsp;</p>","", $description); echo str_replace("<p><br></p>","", $description);?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


          
        </div>
        <div class="col-lg-4">
          <div class="course-sidebar natural">
            <div class="preview-video-box">
              {{-- <a data-toggle="modal" data-target="#CoursePreviewModal"> --}}
                <img src="/public/images/Course/{{$course->thumbnail}}" alt="" class="img-fluid">
                {{-- <span class="preview-text">Preview this course</span>
                <span class="play-btn"></span> --}}
              {{-- </a> --}}
            </div>
            <div class="course-sidebar-text-box">
             
  
  

              @if (Auth::check())
                    <!-- WISHLIST BUTTON -->
  
              <div class="buy-btns">

@if (App\Models\Enroll::where('course_id',$course->id)->where('student_id',Auth::User()->id)->count() == 1)
<a  href="/start_lesson/{{$course->id}}" class="btn btn-add-cart" type="button" >Start Learning</a>
@else
    
<a class="btn btn-add-cart" type="button" onclick="document.getElementById('enroll{{$course->id}}').submit()">Enroll</a>
@endif



               
                <form id="enroll{{$course->id}}" action="{{URL::to('enrollto')}}" method="post" >
                  @csrf
                  <input type="hidden" name="student_id" value="{{Auth::User()->id}}">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="instructor_id" value="{{$course->instructor}}">
                </form>
              </div>
              @else
                    <!-- WISHLIST BUTTON -->
            
  
              <div class="buy-btns">

                <a href="/login" class="btn btn-add-cart" >Enroll</a>
               
              </div>
              @endif
            
  
  
              <div class="includes">
                <div class="title"><b></b></div>
                <ul>
                 

                  <li><i class="far fa-file"></i>{{$lessons->count()}} Exercise</li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Modal -->

        <!-- Modal -->
        <style media="screen">
            .embed-responsive-16by9::before {
              padding-top : 0px;
            }
            </style>
@endsection