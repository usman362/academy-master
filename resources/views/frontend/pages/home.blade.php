@extends('frontend.layouts.app')
@section('content')
<section class="home-banner-area" style="background-image: url('/public/frontend/uploads/Kids-in-school-1024x493.jpeg');
background-position: center center;
background-size: cover;
background-repeat: no-repeat;
padding: 170px 0 130px;
color: #fff;">
<div class="container-lg">
<div class="row">
<div class="col">
  <div class="home-banner-wrap">
    <h2>Learn on your schedule</h2>
    <p>Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>
    <form class="" action="{{URL::to('search_query')}}" method="post">
      @csrf
      <div class="input-group">
        <input type="text" class="form-control" name="query" placeholder="What do you want to learn?">
        <div class="input-group-append">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</section>
<section class="home-fact-area">
<div class="container-lg">
<div class="row">
<div class="col-md-4 d-flex">
  <div class="home-fact-box mr-md-auto mr-auto">
    <i class="fas fa-bullseye float-left"></i>
    <div class="text-box">
      <h4>{{$course = App\Models\Course::all()->count()}} Online courses</h4>
      <p>Explore a variety of fresh topics</p>
    </div>
  </div>
</div>

<div class="col-md-4 d-flex">
  <div class="home-fact-box mr-md-auto mr-auto">
    <i class="fa fa-check float-left"></i>
    <div class="text-box">
      <h4>Expert instruction</h4>
      <p>Find the right course for you</p>
    </div>
  </div>
</div>

<div class="col-md-4 d-flex">
  <div class="home-fact-box mr-md-auto mr-auto">
    <i class="fa fa-clock float-left"></i>
    <div class="text-box">
      <h4>Lifetime access</h4>
      <p>Learn on your schedule</p>
    </div>
  </div>
</div>
</div>
</div>
</section>

<section class="course-carousel-area">
<div class="container-lg">
<div class="row">
<div class="col">
  <h2 class="course-carousel-title">Listening</h2>

  <!-- Animated page loader -->
  <style type="text/css">
    @keyframes placeHolderShimmer
    {
      0%
      {
        background-position: -468px 0;
      }

      100%
      {
        background-position: 468px 0;
      }
    }

    @media screen and (max-width: 482px)
    {

      .animated-page-loader-2,
      .animated-page-loader-3,
      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 710px)
    {

      .animated-page-loader-3,
      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 938px)
    {

      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 1166px)
    {

      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 1394px)
    {
      .animated-page-loader-6
      {
        display: none !important;
      }
    }
  </style>

  <div class="animated-loader animated-page-loader-1" style="width: 215px; float: left; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-2" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-3" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-4" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-5" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-6" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function()
    {
      setTimeout(function()
      {
        $('.animated-loader').hide();
        $('.shown-after-loading').show();
      });
    }, false);
  </script>
  
  <div class="course-carousel shown-after-loading" style="display: none;">
    
    @foreach ($listenings as $course)
    <div class="course-box-wrap">
      {{-- class="has-popover" --}}
      <a href="/course-detail/{{$course->id}}" >
        <div class="course-box">
          <div class="course-image">
            <img src="/public/images/Course/{{$course->thumbnail}}" alt="" class="img-fluid">
            <style>
              .img-fluid{
                height: 180px;
              }
            </style>
          </div>
          <div class="course-details">
            <h5 class="title">{{$course->title}}</h5>
            @foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                
           
            <p class="instructors">{{$instructor->name}} {{$instructor->lname}}</p>
            @endforeach

          </div>
        </div>
      </a>

      <div class="webui-popover-content">
        <div class="course-popover-content">
          <div class="last-updated">Last updater Fri, 05-Jul-2019</div>

          <div class="course-title">
            <a href="home/course/wordpress-theme-development-with-bootstrap/12.html">WordPress
              Theme Development with Bootstrap</a>
          </div>
          <div class="course-meta">
            <span class=""><i class="fas fa-play-circle"></i>
              24 Lessons </span>
            <span class=""><i class="far fa-clock"></i>
              00:10:22 Hours </span>
            <span class=""><i class="fas fa-closed-captioning"></i>English</span>
          </div>
          <div class="course-subtitle">Learn how to confidently develop custom & profitable
            Responsive WordPress Themes and Websites with no prior experience.</div>
          <div class="what-will-learn">
            <ul>
              <li>Have the skills to start making money on the side, as a casual
                freelancer, or full time as a work-from-home freelancer</li>
              <li>Easily create a beautiful HTML & CSS website with Bootstrap (that
                doesn't look like generic Bootstrap websites!)</li>
              <li>Convert any static HTML & CSS website into a Custom WordPress Theme</li>
              <li>Have a thorough understanding of utilizing PHP to create WordPress
                websites & themes</li>
              <li>Feel comfortable with the process of turning static websites into
                dynamic WordPress websites</li>
              <li>Fully understand how to use Custom Post Types and Advanced Custom Fields
                in WordPress</li>
            </ul>
          </div>
          <div class="popover-btns">
            <button type="button" class="btn add-to-cart-btn  big-cart-button-12" id="12" onclick="handleCartItems(this)">
              Add to cart </button>
            <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="12"><i class="fas fa-heart"></i></button>

          </div>
        </div>
      </div>
    </div>
    @endforeach
  
    
</div>
</div>
</section>

<section class="course-carousel-area">
<div class="container-lg">
<div class="row">
<div class="col">
  <h2 class="course-carousel-title">Speaking</h2>

  <!-- Animated page loader -->
  <style type="text/css">
    @keyframes placeHolderShimmer
    {
      0%
      {
        background-position: -468px 0;
      }

      100%
      {
        background-position: 468px 0;
      }
    }

    @media screen and (max-width: 482px)
    {

      .animated-page-loader-2,
      .animated-page-loader-3,
      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 710px)
    {

      .animated-page-loader-3,
      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 938px)
    {

      .animated-page-loader-4,
      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 1166px)
    {

      .animated-page-loader-5,
      .animated-page-loader-6
      {
        display: none !important;
      }
    }

    @media screen and (max-width: 1394px)
    {
      .animated-page-loader-6
      {
        display: none !important;
      }
    }
  </style>

  <div class="animated-loader animated-page-loader-1" style="width: 215px; float: left; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-2" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-3" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-4" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-5" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>
  <div class="animated-loader animated-page-loader-6" style="width: 215px; float: left; margin-left: 13px !important; background-color: #fff; border-color: #e5e6e9 #dfe0e4 #d0d1d5; border-radius: 3px; padding: 12px; margin: 0 auto; max-width: 100%;">
    <div style="animation-duration: 1.5s; animation-fill-mode: forwards; animation-iteration-count: infinite; animation-timing-function: linear; animation-name: placeHolderShimmer; background: #f6f7f8; background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%); background-size: 800px 104px; height: 370px; position: relative;">
      <div style="background: #fff; position: absolute; top: 210px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 220px; left: 0px; right: 0; height: 20px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 240px; left: 0px; right: 0; height: 30px;">
      </div>

      <div style="background: #fff; position: absolute; top: 270px; left: 160px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 270px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>

      <div style="background: #fff; position: absolute; top: 280px; left: 0px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 0px; right: 0; height: 13px; width: 15px;">
      </div>
      <div style="background: #fff; position: absolute; top: 303px; left: 0px; right: 0; height: 42px;">
      </div>
      <div style="background: #fff; position: absolute; top: 290px; left: 100px; right: 0; height: 13px;">
      </div>
      <div style="background: #fff; position: absolute; top: 360px; left: 0px; right: 0; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 345px; left: 0px; right: 90px; height: 20px;">
      </div>
      <div style="background: #fff; position: absolute; top: 210px; left: 176px; right: 0px; height: 150px; width: 15px;">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function()
    {
      setTimeout(function()
      {
        $('.animated-loader').hide();
        $('.shown-after-loading').show();
      });
    }, false);
  </script>
  <div class="course-carousel shown-after-loading" style="display: none;">
    @foreach ($speakings as $course)
    <div class="course-box-wrap">
      {{-- class="has-popover" --}}
      <a href="/course-detail/{{$course->id}}" >
        <div class="course-box">
          <div class="course-image">
            <img src="/public/images/Course/{{$course->thumbnail}}" alt="" class="img-fluid">
            <style>
              .img-fluid{
                height: 180px;
              }
            </style>
          </div>
          <div class="course-details">
            <h5 class="title">{{$course->title}}</h5>
            @foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                
           
            <p class="instructors">{{$instructor->name}} {{$instructor->lname}}</p>
            @endforeach
        

 

 


           
          </div>
        </div>
      </a>

      <div class="webui-popover-content">
        <div class="course-popover-content">
          <div class="last-updated">Last updater Fri, 05-Jul-2019</div>

          <div class="course-title">
            <a href="home/course/wordpress-theme-development-with-bootstrap/12.html">WordPress
              Theme Development with Bootstrap</a>
          </div>
          <div class="course-meta">
            <span class=""><i class="fas fa-play-circle"></i>
              24 Lessons </span>
            <span class=""><i class="far fa-clock"></i>
              00:10:22 Hours </span>
            <span class=""><i class="fas fa-closed-captioning"></i>English</span>
          </div>
          <div class="course-subtitle">Learn how to confidently develop custom & profitable
            Responsive WordPress Themes and Websites with no prior experience.</div>
          <div class="what-will-learn">
            <ul>
              <li>Have the skills to start making money on the side, as a casual
                freelancer, or full time as a work-from-home freelancer</li>
              <li>Easily create a beautiful HTML & CSS website with Bootstrap (that
                doesn't look like generic Bootstrap websites!)</li>
              <li>Convert any static HTML & CSS website into a Custom WordPress Theme</li>
              <li>Have a thorough understanding of utilizing PHP to create WordPress
                websites & themes</li>
              <li>Feel comfortable with the process of turning static websites into
                dynamic WordPress websites</li>
              <li>Fully understand how to use Custom Post Types and Advanced Custom Fields
                in WordPress</li>
            </ul>
          </div>
          <div class="popover-btns">
            <button type="button" class="btn add-to-cart-btn  big-cart-button-12" id="12" onclick="handleCartItems(this)">
              Add to cart </button>
            <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="12"><i class="fas fa-heart"></i></button>

          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
</div>
</div>
</section>
@endsection