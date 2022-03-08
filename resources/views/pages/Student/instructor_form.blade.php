@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Become an instructor</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Instructor application form</h4>
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Heads up!</h4>
                <p>Fill all the fields carefully and share if you want to share any document with us it will help us to evaluate you as an instructor.</p>
              </div>
              <form class="required-form" action="{{URL::to('storeinstructor')}}" method="post" enctype="multipart/form-data">
                @csrf
              
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="name-help" placeholder="Your name will go here" value="{{$instructor->name}} {{$instructor->lname}}" readonly="" required="">
                  <small id="name-help" class="form-text text-muted">Your name is required</small>
                </div>
                <input type="hidden" name="student_id" value="{{$instructor->id}}">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="email-help" placeholder="Your email will go here" value="{{$instructor->email}}" readonly="" required="">
                  <small id="email-help" class="form-text text-muted">Your email is required</small>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea name="address" id="address" class="form-control" required=""></textarea>
                  <small id="address-help" class="form-text text-muted">Your address is required</small>
                </div>
                <div class="form-group">
                  <label for="phone">Phone number</label>
                  <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone-help" placeholder="Your phone number will go here" required="">
                  <small id="phone-help" class="form-text text-muted">Your phone number is required</small>
                </div>
                <div class="form-group">
                  <label for="message">Any message</label>
                  <textarea name="message" id="message" class="form-control"></textarea>
                  <small id="message-help" class="form-text text-muted">If any message you want to share</small>
                </div>
                <div class="form-group">
                  <label> Document</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="document" name="document" onchange="changeTitleOfImageUploader(this)">
                      <label class="custom-file-label" for="document">Document</label>
                    </div>
                  </div>
                  <small id="attachment-help" class="form-text text-muted">If any document you want to share ( .doc, .docs, .pdf, .txt, .png, .jpg, jpeg ) Are accepted</small>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="text-center">
                      <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-primary text-center" >Apply</button>
                      </div>
                    </div>
                  </div> <!-- end col -->
                </div>
              </form>
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div>
      </div>
  
  
      <style media="screen">
        body
        {
          overflow-x: hidden;
        }
      </style>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

@endsection