@extends('layouts.app')
@section('content')
    
<div class="modal fade show" id="scrollable-modal" tabindex="" role="dialog" aria-labelledby="scrollableModalTitle" style="display: block; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document" tabindex="">
      <div class="modal-content" tabindex="">
        <div class="modal-header" tabindex="">
          <h5 class="modal-title" id="scrollableModalTitle">Add new Exercise</h5>
         
        </div>
        <div class="modal-body ml-2 mr-2" tabindex="" data-select2-id="121">
          <!-- SHOWING THE LESSON TYPE IN AN ALERT VIEW -->
          
          <!-- ACTUAL LESSON ADDING FORM -->
          <form action="{{URL::to('lessonstore',$lessons->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
          
            <input type="hidden" name="course_id" value="{{$lessons->course_id}}">
           
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{$lessons->title}}" required="">
            </div>
  
            
              {{-- <label>Section</label>
              <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" id="category" onchange="audiofile()" name="section" required="" data-select2-id="147" tabindex="-1" aria-hidden="true">
                <option value="">Select Section</option>
                <option value="Listening">Listening</option>
                <option value="Speaking">Speaking</option>
            
              </select> --}}
              <div class="form-group">
              <div id="audio">
                <label class="col-md-12 col-form-label" for="sub_category_id"> <span class="required" style="font-size: 24px"><i class="far fa-file-audio"></i></span> Add Audio File</label>
                <input type="file" class="form-control" name="audio_file" placeholder="Add Audio File" >
              </div>
              </div>
              <div class="form-group">
              <div id="video">
                <label class="col-md-12 col-form-label" for="sub_category_id"> <span class="required" style="font-size: 24px"><i class="far fa-file-video"></i></span> Add Video File</label>
                <input type="file" class="form-control" name="video_file" placeholder="Add Video File" >
              </div>
            </div>
  
  
            <div class="form-group">
              <label>Video url</label>
              <input type="url" id="video_url" name="web_url" class="form-control" value="{{$lessons->web_url}}" placeholder="This video will be shown on web application">
             
            </div>
  
            <div class="form-group">
              <label>Duration</label>
              <input type="text" class="form-control" data-toggle="timepicker" data-minute-step="5" name="mob_duration" id="html5_duration_for_mobile_application" data-show-meridian="false" value="{{$lessons->mob_duration}}">
            </div>
  
            <div class="form-group">
              <label>Summary</label>
              <textarea name="summary" class="form-control">{{$lessons->summary}}</textarea>
            </div>
  
            <div class="text-center">
              <button class="btn btn-success" type="submit" name="button">Add lesson</button>
            </div>
          </form>
  
          <script type="text/javascript">
            $(document).ready(function()
            {
              initSelect2(['#section_id', '#lesson_type', '#lesson_provider', '#lesson_provider_for_mobile_application']);
              initTimepicker();
  
              // HIDING THE SEARCHBOX FROM SELECT2
              $('select').select2(
              {
                minimumResultsForSearch: -1
              });
            });
  
            function ajax_get_video_details(video_url)
            {
              $('#perloader').show();
              if (checkURLValidity(video_url))
              {
                $.ajax(
                {
                  url: 'https://demo.academy-lms.com/academy/admin/ajax_get_video_details',
                  type: 'POST',
                  data:
                  {
                    video_url: video_url
                  },
                  success: function(response)
                  {
                    jQuery('#duration').val(response);
                    $('#perloader').hide();
                    $('#invalid_url').hide();
                  }
                });
              }
              else
              {
                $('#invalid_url').show();
                $('#perloader').hide();
                jQuery('#duration').val('');
  
              }
            }
  
            function checkURLValidity(video_url)
            {
              var youtubePregMatch = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
              var vimeoPregMatch = /^(http\:\/\/|https\:\/\/)?(www\.)?(vimeo\.com\/)([0-9]+)$/;
              if (video_url.match(youtubePregMatch))
              {
                return true;
              }
              else if (vimeoPregMatch.test(video_url))
              {
                return true;
              }
              else
              {
                return false;
              }
            }
          </script>
        </div>
       
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  


  <script>
    
function audiofile(){
  var audios = document.getElementById("audio");
  var videos = document.getElementById("video");
 var category = document.getElementById("category").value;
 if(category == 'Listening'){
 audios.style.display = "block";
 videos.style.display = "none";
//alert(category);

 }else if(category == 'Speaking'){
  audios.style.display = "none";
  videos.style.display = "block";
  //alert(category);
 }else{
  audios.style.display = "none";
  videos.style.display = "none";
 }
}
  </script>

@endsection