@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Manage profile</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row ">
        <div class="col-xl-7">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Basic info</h4>
              <form action="{{URL::to('update-profile',$profile->id)}}" class="form-horizontal form-groups-bordered validate" target="_top" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                <div class="form-group">
                  <label>First name</label>
                  <input type="text" class="form-control" name="name" value="{{$profile->name}}" required="">
                  <input type="hidden" name="role" value="{{$profile->role}}">
                </div>
  
                <div class="form-group">
                  <label>Last name</label>
                  <input type="text" class="form-control" name="lname" value="{{$profile->lname}}" required="">
                </div>
  
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="{{$profile->email}}" required="">
                </div>
  
                <div class="form-group">
                  <label>Facebook link</label>
                  <input type="text" class="form-control" name="facebook" value="{{$profile->facebook}}" required="">
                </div>
  
                <div class="form-group">
                  <label>Twitter link</label>
                  <input type="text" class="form-control" name="twitter" value="{{$profile->twitter}}" required="">
                </div>
  
                <div class="form-group">
                  <label>Linkedin link</label>
                  <input type="text" class="form-control" name="linkedin" value="{{$profile->linkedin}}" required="">
                </div>
  
                
  
                <div class="form-group">
                  <label>Biography</label>
                  <textarea rows="5" class="form-control" name="biography" id="biography" placeholder="Biography" required="" style="display: none;">{{$profile->biography}}</textarea>
                 
                </div>
  
  
                <div class="form-group">
                  <label> Photo <small>(The image size should be any square image)</small> </label>
                  <div class="d-flex mt-2">
                    <div class="">
                      <img class="rounded-circle img-thumbnail" src="{{asset('images/Login/'.$profile->image)}}" alt="" style="height: 50px; width: 50px;">
                    </div>
                    <div class="flex-grow-1 pl-2">
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" id="user_image" onchange="changeTitleOfImageUploader(this)" accept="image/*">
                          <label class="custom-file-label ellipsis" for="">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="row justify-content-center">
                  <button type="submit" class="btn btn-primary">Update profile</button>
                </div>
              </form>
  
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div>
        <div class="col-xl-5">
          <div class="card">
            <div class="card-body">
              <form action="https://demo.academy-lms.com/academy/admin/manage_profile/change_password/1" class="form-horizontal form-groups-bordered validate" target="_top" method="post" accept-charset="utf-8">
                <div class="form-group">
                  <label>Current password</label>
                  
                  <input type="password" class="form-control" name="current_password" value="" required="">
                </div>
                <div class="form-group">
                  <label>New password</label>
                  <input type="password" class="form-control" name="new_password" value="" required="">
                </div>
                <div class="form-group">
                  <label>Confirm new password</label>
                  <input type="password" class="form-control" name="confirm_password" value="" required="">
                </div>
                <div class="row justify-content-center">
                  <button type="submit" class="btn btn-info">Update password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <script type="text/javascript">
        $(document).ready(function()
        {
          initSummerNote(['#biography']);
        });
      </script>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

@endsection