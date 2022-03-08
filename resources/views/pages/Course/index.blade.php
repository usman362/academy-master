@extends('layouts.app')
@section('content')



<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
             
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Lessons
            
                 <a href="/Course/create" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Add new lesson</a>
                
                </h4>
             
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card widget-inline">
            <div class="card-body p-0">
              <div class="row no-gutters">
                <div class="col-sm-6 col-xl-6">
                  <a href="#" class="text-secondary">
                    <div class="card shadow-none m-0">
                      <div class="card-body text-center">
                        <i class="dripicons-link text-muted" style="font-size: 24px;"></i>
                        @if (Auth::User()->role == "2")
                        <h3><span>{{$course = DB::table("courses")->where('instructor',Auth::User()->id)->get()->count()}}</span></h3>
                        @else
                        <h3><span>{{$course = DB::table("courses")->get()->count()}}</span></h3>
                        @endif
                      
                        <p class="text-muted font-15 mb-0">Active Lessons</p>
                      </div>
                    </div>
                  </a>
                </div>
  
                <div class="col-sm-6 col-xl-6">
                  <a href="#" class="text-secondary">
                    <div class="card shadow-none m-0 border-left">
                      <div class="card-body text-center">
                        <i class="dripicons-link-broken text-muted" style="font-size: 24px;"></i>
                        <h3><span>0</span></h3>
                        <p class="text-muted font-15 mb-0">Pending Lessons</p>
                      </div>
                    </div>
                  </a>
                </div>
  
               
  
              </div> <!-- end row -->
            </div>
          </div> <!-- end card-box-->
        </div> <!-- end col-->
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Lesson list</h4>
           
  
              <div class="table-responsive-sm mt-4">
                <div id="course-datatable-server-side_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                    
                    </div>
                    <div class="col-sm-12 col-md-6">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="course-datatable-server-side" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" data-page-length="25" role="grid" aria-describedby="course-datatable-server-side_info" style="width: 100%;">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" rowspan="1" colspan="1" style="width: 9.8px;" aria-label="#">#</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 421.6px;" aria-label="Title">Title</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 128.6px;" aria-label="Category">Section</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 128.6px;" aria-label="Lesson and section">Exercise</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111.6px;" aria-label="Enrolled student">Enrolled student</th>
                            {{-- <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.6px;" aria-label="Status">Status</th> --}}

                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51.6px;" aria-label="Actions">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
@if (Auth::User()->role == '2')
@foreach (App\Models\Course::where('instructor',Auth::User()->id)->get() as $course)
                                
<tr role="row" class="odd">
  <td class="sorting_1" tabindex="0">{{$course->id}}</td>
  <td><strong><a href="/Course/{{$course->id}}/edit">{{$course->title}}</a></strong><br>
    <small class="text-muted">Instructor: <b>@foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
        {{$instructor->name}} {{$instructor->lname}}
    @endforeach</b></small>
  </td>
  <td><span class="badge badge-dark-lighten">
  
       {{$course->category}}
   
  </span></td>
  <td>

    <small class="text-muted"><b>Total Exercise</b>:  {{$income = DB::table("lessons")->where('course_id',$course->id)->get()->count("id")}}</small>
  </td>
  <td><small class="text-muted"><b>Total enrolment</b>: {{$income = DB::table("enrolls")->where('course_id',$course->id)->get()->count("id")}}</small></td>
  {{-- <td><span class="badge badge-success-lighten">Active</span></td> --}}
  
  <td>
    <div class="dropright dropright">
      <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="mdi mdi-dots-vertical"></i>
      </button>
      <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/course-detail/{{$course->id}}" target="_blank">View Lesson on frontend</a></li>
                                  <li><a class="dropdown-item" href="/Course/{{$course->id}}/edit">Edit this lesson</a></li>
                                  <li><a class="dropdown-item" href="#" onclick="document.getElementById('form{{$course->id}}').submit()">Delete</a></li>
                                  <form action="{{route('Course.destroy',$course->id)}}" id="form{{$course->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                  </form>
                                </ul>
    </div>
  </td>
</tr>

@endforeach
@else

                            @foreach ($courses as $course)
                                
                          <tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0">#</td>
                            <td><strong><a href="/Course/{{$course->id}}/edit">{{$course->title}}</a></strong><br>
                              <small class="text-muted">Instructor: <b>@foreach (App\Models\User::where('id',$course->instructor)->get() as $instructor)
                                  {{$instructor->name}} {{$instructor->lname}}
                              @endforeach</b></small>
                            </td>
                            <td><span class="badge badge-dark-lighten">
                            
                                 {{$course->category}}
                             
                            </span></td>
                            <td>
                             
                              <small class="text-muted"><b>Total Exercise</b>:  {{$income = DB::table("lessons")->where('course_id',$course->id)->get()->count("id")}}</small>
                            </td>
                            <td><small class="text-muted"><b>Total enrolment</b>: {{$income = DB::table("enrolls")->where('course_id',$course->id)->get()->count("id")}}</small></td>
                            {{-- <td><span class="badge badge-success-lighten">Active</span></td> --}}
                            
                            <td >
                              <div class="dropright dropright">
                                <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/course-detail/{{$course->id}}" target="_blank">View Lesson on frontend</a></li>
                                  <li><a class="dropdown-item" href="/Course/{{$course->id}}/edit">Edit this lesson</a></li>
                                  <li><a class="dropdown-item" href="#" onclick="document.getElementById('form{{$course->id}}').submit()">Delete</a></li>
                                  <form action="{{route('Course.destroy',$course->id)}}" id="form{{$course->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                  </form>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                      <div id="course-datatable-server-side_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="course-datatable-server-side_info" role="status" aria-live="polite"></div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="course-datatable-server-side_paginate">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>    

@endsection