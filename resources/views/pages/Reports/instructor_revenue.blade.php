@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Instructor revenue</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Instructor revenue</h4>
              <div class="table-responsive-sm mt-4">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                 
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                      <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Enrolled course: activate to sort column descending" style="width: 495.812px;">Enrolled course</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Instructor: activate to sort column ascending" style="width: 117.812px;">Instructor</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                              
                          <tr class="gradeU odd" role="row">
                            <td class="sorting_1">
                              <strong><a href="/Course/{{$course->id}}/edit" target="_blank">{{$course->title}}</a></strong><br>
                              <small class="text-muted">Enrolment date: {{$course->created_at}}</small>
                            </td>
                           
                        
                              
                         
                          <td>
                              {{$course->name}} {{$course->lname}}
                        </td>
                            
                          </tr>
                          @endforeach

                          

                          
                        </tbody>
                      </table>
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