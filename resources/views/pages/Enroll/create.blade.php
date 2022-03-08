@extends('layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <!-- start page title -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Enrol a student</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row justify-content-center">
        <div class="col-xl-7">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <h4 class="mb-3 header-title">Enrolment form</h4>
  
                <form class="required-form" action="{{URL::to('Enroll')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="user_id">User<span class="required">*</span> </label>
                    <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="student_id" id="user_id" required="" data-select2-id="user_id" tabindex="-1" aria-hidden="true">
                      <option value="" data-select2-id="2">Select a user</option>
                     @foreach ($students as $student)
                         <option value="{{$student->id}}">{{$student->name}} {{$student->lname}}</option>
                     @endforeach
                    </select>
                  </div>
  
                  <div class="form-group">
                    <label for="course_id">Course to enrol<span class="required">*</span> </label>
                    <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="course_id" id="course_id" required="" data-select2-id="course_id" tabindex="-1" aria-hidden="true">
                      <option value="" data-select2-id="4">Select a course</option>
                     @foreach ($courses as $course)
                         
                      <option value="{{$course->id}}" >{{$course->title}}</option>
                      {{-- <input type="hidden" value="{{$course->instructor}}" name="instructor_id"> --}}

                      @endforeach
                    </select>
                  </div>
  
                  <button type="submit" class="btn btn-primary" >Enrol student</button>
                </form>
              </div>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>



@endsection