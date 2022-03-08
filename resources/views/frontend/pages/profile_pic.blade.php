@extends('frontend.layouts.app')
@section('content')
    


<section class="page-header-area my-course-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="page-title print-hidden">User Profile</h1>
          <ul class="print-hidden">
            <li class=""><a href="/my_courses">Courses</a></li>
  
  
            {{-- <li class=""><a href="/my_wishlist">Wishlists</a></li>
  
            <li class=""><a href="/my_messages">Messages</a></li> --}}
  
            <li class="active"><a href="/user_profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<section class="user-dashboard-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="user-dashboard-box">
            <div class="user-dashboard-sidebar">
              <div class="user-box">
                <img src="{{asset('images/Login/'.$profile->image)}}" alt="" class="img-fluid">
                <div class="name">Signe Thompson</div>
              </div>
              <div class="user-dashboard-menu">
                <ul>
                  <li><a href="/user_profile">Profile</a></li>
                
                  <li class="active"><a href="/user_profile_pic">Photo</a></li>
                </ul>
              </div>
            </div>
            <div class="user-dashboard-content">
              <div class="content-title-box">
                <div class="title">Photo</div>
                <div class="subtitle">Update your photo.</div>
              </div>
              <form action="{{URL::to('profile_update',$profile->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="content-box">
                  <div class="email-group">
                    <div class="form-group">
                      <label for="user_image">Upload image:</label>
                      <input type="file" class="form-control" name="image" id="user_image">
                    </div>
                  </div>
                </div>
                <div class="content-update-box">
                  <button type="submit" class="btn">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection