@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Teacher add </h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
  
              <h4 class="header-title mb-3">Teacher add form</h4>
  
              <form class="required-form" action="{{URL::to('Teacher',$teachers->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div id="progressbarwizard">
                  <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                    <li class="nav-item">
                      <a href="#basic_info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                        <i class="mdi mdi-face-profile mr-1"></i>
                        <span class="d-none d-sm-inline">Basic info</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#login_credentials" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-lock mr-1"></i>
                        <span class="d-none d-sm-inline">Login credentials</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#social_information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-wifi mr-1"></i>
                        <span class="d-none d-sm-inline">Social information</span>
                      </a>
                    </li>
                   
                    <li class="nav-item">
                      <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                        <span class="d-none d-sm-inline">Finish</span>
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content b-0 mb-0">
  
                    <div id="bar" class="progress mb-3" style="height: 7px;">
                      <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 20%;"></div>
                    </div>
  
                    <div class="tab-pane active" id="basic_info">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="first_name">First name<span class="required">*</span></label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" id="first_name" value="{{$teachers->name}}" name="name" required="">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="last_name">Last name<span class="required">*</span></label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" id="last_name"  value="{{$teachers->lname}}" name="lname" required="">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="linkedin_link">Biography</label>
                            <div class="col-md-9">
                              <textarea name="biography" id="summernote-basic" class="form-control" style="display: none;">
                               {{$teachers->biography}}</textarea>
                              
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="user_image">User image</label>
                            <div class="col-md-9">
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="user_image" name="image" accept="image/*" onchange="changeTitleOfImageUploader(this)">
                                  <label class="custom-file-label" for="user_image">Choose user image</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row -->
                    </div>
  
                    <div class="tab-pane" id="login_credentials">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="email">Email<span class="required">*</span></label>
                            <div class="col-md-9">
                              <input type="email" id="email" name="email"  value="{{$teachers->email}}" class="form-control" required="">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="password">Password<span class="required">*</span></label>
                            <div class="col-md-9">
                              <input type="password" id="password" name="password" class="form-control" required="">
                            </div>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row -->
                    </div>
  
                    <div class="tab-pane" id="social_information">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="facebook_link"> Facebook</label>
                            <div class="col-md-9">
                              <input type="text" id="facebook_link"  value="{{$teachers->facebook}}" name="facebook" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="twitter_link">Twitter</label>
                            <div class="col-md-9">
                              <input type="text" id="twitter_link"  value="{{$teachers->twitter}}" name="twitter" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="linkedin_link">Linkedin</label>
                            <div class="col-md-9">
                              <input type="text" id="linkedin_link"  value="{{$teachers->linkedin}}" name="linkedin" class="form-control">
                            </div>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row -->
                    </div>
                   
                    <div class="tab-pane" id="finish">
                      <div class="row">
                        <div class="col-12">
                          <div class="text-center">
                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                            <h3 class="mt-0">Thank you !</h3>
  
                            <p class="w-75 mb-2 mx-auto">You are just one click away</p>
  
                            <div class="mb-3">
                              <button type="submit" class="btn btn-primary" onclick="checkRequiredFields()" name="button">Submit</button>
                            </div>
                          </div>
                        </div> <!-- end col -->
                      </div> <!-- end row -->
                    </div>
  
                    <ul class="list-inline mb-0 wizard text-center">
                      <li class="previous list-inline-item disabled">
                        <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-left-bold"></i> </a>
                      </li>
                      <li class="next list-inline-item">
                        <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-right-bold"></i> </a>
                      </li>
                    </ul>
  
                  </div> <!-- tab-content -->
                </div> <!-- end #progressbarwizard-->
              </form>
  
            </div> <!-- end card-body -->
          </div> <!-- end card-->
        </div>
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>


@endsection