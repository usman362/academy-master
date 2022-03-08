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
          <form action="{{URL::to('quizstore',$quiz->id)}}" method="post" enctype="multipart/form-data">
            @csrf
           
            <input type="hidden" name="course_id" value="{{$quiz->course_id}}">
            <div class="form-group">
              <label for="title">Quiz title</label>
              <input class="form-control" type="text" name="title" value="{{$quiz->title}}" id="title" required="">
            </div>
            <div class="form-group">
              <label for="section_id">Exercise</label>
              <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="exercise" id="section_id" required="" data-select2-id="section_id" tabindex="-1" aria-hidden="true">
                <option value="">Select Exercise</option>
                @foreach (App\Models\Lesson::where('course_id',$quiz->course_id)->get() as $curriculam)
                <option value="{{$curriculam->id}}" {{$curriculam->id == $quiz->exercise ? 'selected' : ''}}>
                  {{$curriculam->title}}</option>
                @endforeach
                
              

              </select>
            </div>
            <div class="form-group">
              <label>Instruction</label>
              <textarea name="instruction" class="form-control">{{$quiz->instruction}}</textarea>
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