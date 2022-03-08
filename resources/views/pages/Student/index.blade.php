@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Student <a href="/Student/create" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Add student</a>
              </h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Student</h4>
              <div class="table-responsive-sm mt-4">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                      <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 15.8125px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 49.8125px;">Photo</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112.812px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 164.812px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Enrolled courses: activate to sort column ascending" style="width: 466.812px;">Enrolled courses</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 63.8125px;">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
  @foreach ($students as $student)
  <tr role="row" class="odd">
    <td class="sorting_1">{{$student->id}}</td>
    <td>
      <img src="/public/images/Login/{{$student->image}}" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
    </td>
    <td>{{$student->name}} {{$student->lname}} </td>
    <td>{{$student->email}}</td>
    <td>
        {{$student->biography}}
    </td>
    <td>
      <div class="dropright dropright">
        <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="mdi mdi-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/Student/{{$student->id}}/edit">Edit</a></li>
          <li><a class="dropdown-item" href="#" onclick="document.getElementById('form{{$student->id}}').submit()">Delete</a></li>
          <form id="form{{$student->id}}" action="{{route('Student.destroy', $student->id)}}" method="post"> @method('DELETE')
            @csrf</form>
        </ul>
      </div>
    </td>
  </tr>
  @endforeach
                         
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>



@endsection