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
                <div class="name">
                  <div class="name">{{$profile->name}} {{$profile->lname}}</div>
                </div>
              </div>
              <div class="user-dashboard-menu">
                <ul>
                  <li class="active"><a href="/user_profile">Profile</a></li>
                  {{-- <li><a href="/user_profile_login">Account</a></li> --}}
                  <li><a href="/user_profile_pic">Photo</a></li>
                </ul>
              </div>
            </div>
            <div class="user-dashboard-content">
              <div class="content-title-box">
                <div class="title">Profile</div>
                <div class="subtitle">Add information about yourself to share on your profile.</div>
              </div>
              <form action="{{URL::to('profileinfo_update',$profile->id)}}" method="post">
                @csrf
                <div class="content-box">
                  <div class="basic-group">
                    <div class="form-group">
                      <label for="FristName">Basics:</label>
                      <input type="text" class="form-control" name="name" id="FristName" placeholder="First name" value="{{$profile->name}}">
                      <input type="hidden" name="role" value="{{$profile->role}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="lname" placeholder="Last name" value="{{$profile->lname}}">
                    </div>
                    <div class="form-group">
                        <label for="Biography">Biography:</label>
                        <textarea class="form-control author-biography-editor" name="biography" id="Biography">{{$profile->biography}}</textarea>
                      </div>
                  </div>
                  <div class="link-group">
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="60" name="twitter" placeholder="Twitter link" value="{{$profile->twitter}}">
                      <small class="form-text text-muted">Add your twitter link.</small>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="60" name="facebook" placeholder="Facebook link" value="{{$profile->facebook}}">
                      <small class="form-text text-muted">Add your facebook link.</small>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="60" name="linkedin" placeholder="Linkedin link" value="{{$profile->linkedin}}">
                      <small class="form-text text-muted">Add your linkedin link.</small>
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

  <script src="https://default.academy-lms.com/assets/frontend/default/js/tinymce.min.js"></script>

@endsection