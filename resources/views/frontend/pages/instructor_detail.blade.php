@extends('frontend.layouts.app')
@section('content')
    
<section class="instructor-header-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="instructor-name">{{$instructor->name}} {{$instructor->lname}}</h1>
          <h2 class="instructor-title">Eat Sleep Code Repeat</h2>
        </div>
      </div>
    </div>
  </section>
  
  <section class="instructor-details-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="instructor-left-box text-center">
            <div class="instructor-image">
              <img src="/public/images/Login/{{$instructor->image}}" alt="" class="img-fluid">
            </div>
            <div class="instructor-social">
              <ul>
                <li><a href="{{$instructor->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{$instructor->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{$instructor->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="instructor-right-box">
  
            <div class="biography-content-box view-more-parent">
              <div class="view-more" onclick="viewMore(this,'hide')"><b>Show full biography</b></div>
              <div class="biography-content">
                <?php $description = $instructor->biography ?>
            <?php $description=str_replace("<p>&nbsp;</p>","", $description); echo str_replace("<p><br></p>","", $description);?>
              </div>
            </div>
           
            <div class="instructor-stat-box">
              <ul>
                <li>
                  <div class="small">Total student</div>
                  <div class="num">
                    {{$enroll = App\Models\Enroll::where('instructor_id',$instructor->id)->count()}} </div>
                </li>
                <li>
                  <div class="small">Courses</div>
                  <div class="num">{{$course = App\Models\Course::where('instructor',$instructor->id)->count()}}</div>
                </li>
                <li>
                  <div class="small">Reviews</div>
                  <div class="num">5</div>
                </li>
              </ul>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection