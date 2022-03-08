@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Enrol history</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Enrol histories</h4>
              <div class="row justify-content-md-center">
                <div class="col-xl-6">
                  <form class="form-inline" action="{{URL::to('Enroll/filter_by_date_range')}}" method="get">
                    <div class="col-xl-10">
                      <div class="form-group">
                        <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue" data-cancel-class="btn-light" style="width: 100%;">
                          <i class="mdi mdi-calendar"></i>&nbsp;
                          <span id="selectedValue">May 01, 2021 - May 31, 2021</span> <i class="mdi mdi-menu-down"></i>
                        </div>
                        <input id="date_range" type="hidden" name="date_range" value="01 May, 2021 - 31 May, 2021">
                      </div>
                    </div>
                    <div class="col-xl-2">
                      <button type="submit" class="btn btn-info" id="submit-button" onclick="update_date_range();"> Filter</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="table-responsive-sm mt-4">
                <table class="table table-striped table-centered mb-0">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>User name</th>
                      <th>Enrolled course</th>
                      <th>Enrolment date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($enrolls as $enroll)
                          
                    <tr class="gradeU">
                        
                      <td>
                        <img src="{{asset('backend/image/placeholder.png')}}" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                      </td>
                      @foreach (App\Models\User::where('id',$enroll->student_id)->get() as $student)
                          
                      <td>
                        <b>{{$student->name}} {{$student->lname}}</b><br>
                        <small>Email: {{$student->email}}</small>
                      </td>
                      
                      @endforeach

                      @foreach (App\Models\Course::where('id',$enroll->course_id)->get() as $course)
                          
                      
                      <td><strong><a href="/Course/{{$course->id}}/edit" target="_blank">{{$course->title}}</a></strong></td>
                      @endforeach

                      <td>{{$enroll->created_at}}</td>
                      <td>
                        <button type="button" class="btn btn-outline-danger btn-icon btn-rounded btn-sm" onclick="document.getElementById('form1{{$enroll->id}}').submit();"> <i class="dripicons-trash"></i> </button>
                        <form id="form1{{$enroll->id}}" action="{{route('Enroll.destroy', $enroll->id)}}" method="post"> @method('DELETE')
                            @csrf</form>
                      </td>
                    </tr>
                  
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <script type="text/javascript">
        function update_date_range()
        {
          var x = $("#selectedValue").html();
          $("#date_range").val(x);
        }
      </script>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

 

@endsection