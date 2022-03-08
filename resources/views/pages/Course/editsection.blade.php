@extends('layouts.app')
@section('content')
    
<div class="modal fade show" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" style="display: block; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Add new section</h5>
               
            </div>
            <div class="modal-body ml-2 mr-2">
            <form action="{{URL::to('Curriculum',$curriculam->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="section" value="{{$curriculam->section}}" id="title" required="">
            <input type="hidden" name="course_id" value="{{$curriculam->course_id}}">
            <small class="text-muted">Provide a section name</small>
        </div>
        <div class="text-right">
            <button class="btn btn-success" type="submit" name="button">Submit</button>
        </div>
    </form>
    </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>

@endsection