@extends('layouts.app')
@section('content')
    
<div class="modal fade show" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-modal="true" style="padding-right: 17px; display: block;">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scrollableModalTitle">Add new quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body ml-2 mr-2">
          <form action="{{URL::to('quizstore')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="course_id" value="{{$course->id}}">
            <div class="form-group">
              <label for="title">Quiz title</label>
              <input class="form-control" type="text" name="title" id="title" required="">
            </div>
            <div class="form-group">
              <label for="section_id">Exercises</label>
              <select class="form-control select2 " data-toggle="select2" name="exercise" required="" tabindex="-1" aria-hidden="true">
                @foreach (App\Models\Lesson::where('course_id',$course->id)->get() as $curriculam)
                <option value="{{$curriculam->id}}">{{$curriculam->title}}</option>
                @endforeach
                
              </select>
            </div>
            <div class="form-group">
              <label>Instruction</label>
              <textarea name="instruction" class="form-control"></textarea>
            </div>
            <div class="text-center">
              <button class="btn btn-success" type="submit" name="button">Submit</button>
            </div>
          </form>
          <script type="text/javascript">
            $(document).ready(function()
            {
              initSelect2(['#section_id']);
            });
          </script>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

@endsection