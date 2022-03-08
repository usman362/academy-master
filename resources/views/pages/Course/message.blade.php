@extends('layouts.app')
@section('content')

<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Messages 
              </h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Messages</h4>
              <div class="table-responsive-sm mt-4">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                      <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 15.8125px;">#</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 49.8125px;">User Id</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 112.812px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 164.812px;">Message</th>

                            <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 63.8125px;">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
  @foreach ($messages as $message)
  <tr role="row" class="odd">
    <td class="sorting_1">#</td>
    <td>
        {{$message->user_id}}
    </td>
    @foreach (App\Models\User::where('id',$message->user_id)->get() as $user)
    <td>{{$user->name}} {{$user->lname}}</td>
    @endforeach
   
    <td>{{$message->body}}</td>
   
    <td>
 
         
          <a class="dropdown-item" href="#" onclick="document.getElementById('form{{$message->id}}').submit()">Delete</a>
          <form id="form{{$message->id}}" action="{{URL::to('messagedel',$message->id)}}" method="POST">
            @csrf
          </form>
  
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