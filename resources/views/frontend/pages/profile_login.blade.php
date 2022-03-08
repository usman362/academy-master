@extends('frontend.layouts.app')
@section('content')
    
<section class="page-header-area my-course-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="page-title print-hidden">My courses</h1>
          <ul class="print-hidden">
            <li class=""><a href="/my_courses">Courses</a></li>
  
{{--   
            <li class=""><a href="/my_wishlist">Wishlists</a></li>
  
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
                  <li class="active"><a href="/user_profile_login">Account</a></li>
                  <li><a href="/user_profile_pic">Photo</a></li>
                </ul>
              </div>
            </div>
            <div class="user-dashboard-content">
              <div class="content-title-box">
                <div class="title">Account</div>
                <div class="subtitle">Edit your account settings.</div>
              </div>
              <form action="https://demo.academy-lms.com/default/home/update_profile/update_credentials" method="post">
                <div class="content-box">
                  <div class="email-group">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$profile->email}}">
                    </div>
                  </div>
                  <div class="password-group">
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter current password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="new_password" placeholder="Enter new password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="confirm_password" placeholder="Re-type your password">
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