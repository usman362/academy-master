@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Update: {{$courses->title}}</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Lesson manager <a href="/course-detail/{{$courses->id}}" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm ml-1" target="_blank">View on frontend <i class="mdi mdi-arrow-right"></i> </a>
                <a href="/Course" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i class=" mdi mdi-keyboard-backspace"></i> Back to lesson list</a>
              </h4>
  
              <div class="row w-100">
                <div class="col-xl-12">
                    <form class="required-form" action="{{URL::to('Course',$courses->id)}}" method="post" enctype="multipart/form-data" data-select2-id="15">
                        @csrf
                        @method('PUT')
                      <div id="basicwizard" data-select2-id="basicwizard">
    
                        <ul class="nav nav-pills nav-justified form-wizard-header">
                            
 <li class="nav-item">
    <a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
      <i class="mdi mdi-account-circle mr-1"></i>
      <span class="d-none d-sm-inline">Curriculum</span>
    </a>
  </li>
                        <li class="nav-item">
                        <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 ">
                          <i class="fas fa-pen mr-1"></i>
                          <span class="d-none d-sm-inline">Basic</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                          <i class="fas fa-poll-h mr-1"></i>
                          <span class="d-none d-sm-inline">Requirements</span>
                        </a>
                      </li>
                      {{-- <li class="nav-item">
                        <a href="#outcomes" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                          <i class="mdi mdi-camera-control mr-1"></i>
                          <span class="d-none d-sm-inline">Outcomes</span>
                        </a>
                      </li> --}}
                     
                      <li class="nav-item">
                        <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                          <i class="fas fa-photo-video mr-1"></i>
                          <span class="d-none d-sm-inline">Media</span>
                        </a>
                      </li>
                          <li class="nav-item">
                            <a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                              <i class="mdi mdi-tag-multiple mr-1"></i>
                              <span class="d-none d-sm-inline">Seo</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                              <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                              <span class="d-none d-sm-inline">Finish</span>
                            </a>
                          </li>
                          <li class="w-100 bg-white pb-3">
                            <!--ajax page loader-->
                            <div class="ajax_loader w-100">
                              <div class="ajax_loaderBar"></div>
                            </div>
                            <!--end ajax page loader-->
                          </li>
                        </ul>
    
                        <div class="tab-content b-0 mb-0" data-select2-id="14">
                            <div class="tab-pane active" id="curriculum">

                             
                                    
                                <div class="row justify-content-center">
                                    <div class="col-xl-12 mb-4 text-center mt-3">
                                      {{-- <a href="/addsection/{{$courses->id}}" class="btn btn-outline-primary btn-rounded btn-sm ml-1" ><i class="mdi mdi-plus"></i> Add section</a> --}}
                                      @if (App\Models\Lesson::where('course_id',$courses->id)->count() == 3)
                                          
                                      @else
                                          
                                   
                                      <a href="/addlesson/{{$courses->id}}" class="btn btn-outline-primary btn-rounded btn-sm ml-1"><i class="mdi mdi-plus"></i> Add Exercise</a>
                                      @endif
                                      <a href="/addquiz/{{$courses->id}}" class="btn btn-outline-primary btn-rounded btn-sm ml-1" ><i class="mdi mdi-plus"></i> Add quiz</a>
  
                                    </div>
                                {{-- @foreach (App\Curriculum::where('course_id',$courses->id)->get() as $item) --}}
                                    
                                    <div class="col-xl-8">
                                      <div class="row">
                                        <div class="col-xl-12">
                                          <div class="card bg-light text-seconday on-hover-action mb-5" id="section-22">
                                            <div class="card-body">
                                              <h5 class="card-title" style="min-height: 45px;">Exercise <div class="row justify-content-center alignToTitle float-right display-none" id="widgets-of-section-22" style="display: block;">
                                                  {{-- <a href="/Curriculum/{{$item->id}}/edit"><button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button" ><i class="fas fa-pen"></i> Edit section</button></a>
                                                  <button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button" onclick="document.getElementById('form1{{$item->id}}').submit();"><i class="mdi mdi-window-close"></i> Delete section</button>
                                                  <form id="form1{{$item->id}}" action="{{route('Curriculum.destroy', $item->id)}}" method="post"> @method('DELETE')
                                                    @csrf</form> --}}
                                                </div>
                                              </h5>
                                              <div class="clearfix"></div>
                                              @foreach (App\Models\Quiz::where('course_id',$courses->id)->get() as $quiz)
                                              <div class="col-md-12">
                                                <!-- Portlet card -->
                                                <div class="card text-secondary on-hover-action mb-2" id="lesson-{{$quiz->id}}">
                                                  <div class="card-body thinner-card-body">
                                                    <div class="card-widgets display-none" id="widgets-of-lesson-{{$quiz->id}}" style="display: block;">
                                                      <a href="/question/{{$quiz->id}}" ><i class="mdi mdi-comment-question-outline"></i></a>
                                                      <a href="/editquiz/{{$quiz->id}}" ><i class="fas fa-pen"></i></a>
                                                      <a href="/deletequiz/{{$quiz->id}}" ><i class="mdi mdi-window-close"></i></a>
                                                    </div>
                                                    <h5 class="card-title mb-0">
                                                      <span class="font-weight-light">
                                                        <img src="https://demo.academy-lms.com/academy/assets/backend/lesson_icon/quiz.png" alt="" height="16">
                                                       </span> {{$quiz->title}}
                                                    </h5>
                                                  </div>
                                                </div> <!-- end card-->
                                              </div>
                                              @endforeach
                                              @foreach (App\Models\Lesson::where('course_id',$courses->id)->get() as $lesson)
                                                  
                                            
                                              <div class="col-md-12">
                                                <!-- Portlet card -->
                                                <div class="card text-secondary on-hover-action mb-2" id="lesson-2{{$lesson->id}}">
                                                  <div class="card-body thinner-card-body">
                                                    <div class="card-widgets display-none" id="widgets-of-lesson-2{{$lesson->id}}" style="display: none;">
                                                      <a href="/editlesson/{{$lesson->id}}" ><i class="fas fa-pen"></i></a>
                                                      <a href="/deletelesson/{{$lesson->id}}" ><i class="mdi mdi-window-close"></i></a>
                                                    </div>
                                                    <h5 class="card-title mb-0">
                                                      <span class="font-weight-light">
                                                        <img src="https://demo.academy-lms.com/academy/assets/backend/lesson_icon/video.png" alt="" height="16">
                                                         </span> {{$lesson->title}}
                                                    </h5>
                                                  </div>
                                                </div> <!-- end card-->
                                              </div>
                                              @endforeach
                                            </div> <!-- end card-body-->
                                          </div> <!-- end card-->
                                        </div>
                                      </div>
                                    </div>
                                    
                                {{-- @endforeach --}}
                                  </div>

                                 


                                
                              </div>

                              

                          <div class="tab-pane" id="basic" data-select2-id="basic">
                            <div class="row justify-content-center" data-select2-id="13">
                              <div class="col-xl-8" data-select2-id="12">
                                <input type="hidden" name="course_type" value="general">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="course_title">Lesson title <span class="required">*</span> </label>
                                  <div class="col-md-10">
                                    <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter lesson title" value="{{$courses->title}}" required="">
                                  </div>
                                </div>
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="short_description">Short description</label>
                                  <div class="col-md-10">
                                    <textarea name="short_desc" id="short_description" class="form-control">{{$courses->short_desc}}</textarea>
                                  </div>
                                </div>
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="description">Description</label>
                                  <div class="col-md-10">
                                    <textarea name="desc" id="description" class="form-control" style="display: none;">{{$courses->desc}}</textarea>
                                   
                                  </div>
                                </div>
                                <div class="form-group row mb-3" data-select2-id="11">
                                                               <label class="col-md-2 col-form-label" for="sub_category_id">Category<span class="required">*</span></label>
                                  <div class="col-md-10" data-select2-id="10">
                                    <select class="form-control select2" id="categories"  name="category"required="" >
                                      <option value="" >Select a
                                        Catrgory</option>
                                       
                                        <option value="Listening"
                                        {{'Listening' == $courses->category ? 'selected' : ''}}
                                        >
                                        Listening
                                        </option>

                                        <option value="Speaking"
                                         {{'Speaking' == $courses->category ? 'selected' : ''}}
                                        >
                                        Speaking
                                        </option>
                                    
                                    </select> 
                                   
                                   <small class="text-muted">Select Category</small>
                                    {{-- <div id="audio">
                                      <label class="col-md-12 col-form-label" for="sub_category_id"> <span class="required" style="font-size: 24px"><i class="far fa-file-audio"></i></span> Add Audio File</label>
                                      <input type="file" class="form-control" name="audio_file" placeholder="Add Audio File" >
                                    </div> --}}
                                    <div >
                                         <label class="col-md-2 col-form-label" for="sub_category_id">Intro Video<span class="required">*</span></label>
                                      <label class="col-md-12 col-form-label" for="sub_category_id"> <span class="required" style="font-size: 24px"><i class="far fa-file-video"></i></span> Add Intro Video</label>
                                      <input type="file" class="form-control" name="video_file" placeholder="Add Video File" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="level">Level</label>
                                  <div class="col-md-10">
                                    <select class="form-control select2 " name="level"  tabindex="-1" aria-hidden="true">
                                      
                                      <option value="beginner">
                                        Beginner</option>
                                      <option value="advanced">Advanced</option>
                                      <option value="intermediate">Intermediate</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="language_made_in">Language made in</label>
                                  <div class="col-md-10">
                                    <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="language" id="language_made_in" data-select2-id="language_made_in" tabindex="-1" aria-hidden="true">
                                      <option value="arabic" data-select2-id="6">Arabic
                                      </option>
                                      <option value="arbic">Arbic</option>
                                      <option value="azeri">Azeri</option>
                                      <option value="bangla">Bangla</option>
                                      <option value="bengali">Bengali</option>
                                      <option value="bosnian">Bosnian</option>
                                      <option value="chinese">Chinese</option>
                                      <option value="cyrillic">Cyrillic</option>
                                      <option value="english">English</option>
                                      <option value="espaneol">Espaneol</option>
                                      <option value="espaol">Espaol</option>
                                      <option value="filipino">Filipino</option>
                                      <option value="french">French</option>
                                      <option value="german">German</option>
                                      <option value="greek">Greek</option>
                                      <option value="gujarati">Gujarati</option>
                                      <option value="haitian-creole">Haitian-creole
                                      </option>
                                      <option value="hayeren">Hayeren</option>
                                      <option value="hebrew">Hebrew</option>
                                      <option value="hindi">Hindi</option>
                                      <option value="hungarian">Hungarian</option>
                                      <option value="indo">Indo</option>
                                      <option value="indonesia">Indonesia</option>
                                      <option value="italiano">Italiano</option>
                                      <option value="kazakh">Kazakh</option>
                                      <option value="korean">Korean</option>
                                      <option value="kurdi">Kurdi</option>
                                      <option value="mandarine">Mandarine</option>
                                      <option value="marathi">Marathi</option>
                                      <option value="nepali">Nepali</option>
                                      <option value="persian">Persian</option>
                                      <option value="persisan">Persisan</option>
                                      <option value="polish">Polish</option>
                                      <option value="portugues">Portugues</option>
                                      <option value="portugus-br">Portugus-br</option>
                                      <option value="romanian">Romanian</option>
                                      <option value="russian">Russian</option>
                                      <option value="somali">Somali</option>
                                      <option value="spanish">Spanish</option>
                                      <option value="swedish">Swedish</option>
                                      <option value="tamil">Tamil</option>
                                      <option value="thai">Thai</option>
                                      <option value="tigrinya">Tigrinya</option>
                                      <option value="tr">Tr</option>
                                      <option value="trke">Trke</option>
                                      <option value="turkish">Turkish</option>
                                      <option value="ukraine">Ukraine</option>
                                      <option value="urdu">Urdu</option>
                                      <option value="vietnam">Vietnam</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row mb-3">
                                  <div class="offset-md-2 col-md-10">
                                    <div class="custom-control custom-checkbox">
                                        @if ($courses->top_course == 1)
                                        <input type="checkbox" class="custom-control-input" checked name="top_course" id="is_top_course" value="1">
                                        @else
                                        <input type="checkbox" class="custom-control-input" name="top_course" id="is_top_course" value="0">
                                        @endif
                                      
                                      <label class="custom-control-label" for="is_top_course">Check if this lesson is top
                                        lesson</label>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- end col -->
                            </div> <!-- end row -->
                          </div> <!-- end tab pane -->
    
                          <div class="tab-pane" id="requirements">
                            <div class="row justify-content-center">
                              <div class="col-xl-8">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="requirements">Requirements</label>
                                  <div class="col-md-10">
                                    <div id="requirement_area">
                                      <div class="d-flex mt-2">
                                        <div class="flex-grow-1 px-3">
                                          <div class="form-group " id="newElementId">
                                            <input type="text" class="form-control" name="requirments[]" id="requirements" placeholder="Provide requirements">
                                          </div>
                                        </div>
                                        <div class="">
                                          <button type="button" class="btn btn-success btn-sm add_button" style="" name="button" > <i class="fa fa-plus"></i> </button>
                                        </div>
                                        
                                      
                                      </div>


                                      @foreach (App\Models\CourseRequirement::where('course_id',$courses->id)->get() as $requirement)
<div class="d-flex mt-2">
  <div class="flex-grow-1 px-3">
    <div class="form-group"><input type="text" class="form-control" name="requirments[]" id="requirments" value="{{$requirement->requirments}}" placeholder="Provide requirments"></div>
  </div><a href="javascript:void(0);" class="remove_button"> <button type="button" class="btn btn-danger btn-sm " style="" name="button"> <i class="fa fa-minus"></i> </button></a>
</div>
@endforeach
                                      
                                <script type="text/javascript">
                                  $(document).ready(function(){
                                      var maxField = 10; //Input fields increment limitation
                                      var addButton = $('.add_button'); //Add button selector
                                      var wrapper = $('#requirement_area'); //Input field wrapper
                                      var fieldHTML = '<div class="d-flex mt-2"><div class="flex-grow-1 px-3"><div class="form-group"><input type="text" class="form-control" name="requirments[]" id="requirements" placeholder="Provide requirements"></div></div><a href="javascript:void(0);" class="remove_button"> <button type="button" class="btn btn-danger btn-sm " style="" name="button" > <i class="fa fa-minus"></i> </button></a></div>'; //New input field html 
                                      var x = 1; //Initial field counter is 1
                                      
                                      //Once add button is clicked
                                      $(addButton).click(function(){
                                          //Check maximum number of input fields
                                          if(x < maxField){ 
                                              x++; //Increment field counter
                                              $(wrapper).append(fieldHTML); //Add field html
                                          }
                                      });
                                      
                                      //Once remove button is clicked
                                      $(wrapper).on('click', '.remove_button', function(e){
                                          e.preventDefault();
                                          $(this).parent('div').remove(); //Remove field html
                                          x--; //Decrement field counter
                                      });
                                  });
                                  </script>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

    
                        
                          <div class="tab-pane" id="media" data-select2-id="media">
                            <div class="row justify-content-center" data-select2-id="72">
    
                           
    
                              <div class="col-xl-8">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="course_overview_url">Lesson overview url</label>
                                  <div class="col-md-10">
                                    <input type="text" class="form-control" name="url" id="course_overview_url" value="{{$courses->url}}" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                  </div>
                                </div>
                              </div> <!-- end col -->
                              <!-- this portion will be generated theme wise from the theme-config.json file Starts-->
                              <div class="col-xl-8">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="course_thumbnail_label">Lesson thumbnail</label>
                                  <div class="col-md-10">
                                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                                      <div class="box" style="width: 250px;">
                                        <div class="js--image-preview" style="background-image: url({{asset('images/Course/'.$courses->thumbnail)}}); background-color: #F5F5F5;">
                                        </div>
                                        <div class="upload-options">
                                          <label for="course_thumbnail" class="btn">
                                            <i class="mdi mdi-camera"></i> Lesson
                                            thumbnail <br> <small>(600 X
                                              600)</small> </label>
                                          <input id="course_thumbnail" style="visibility:hidden;" value="{{$courses->thumbnail}}" type="file" class="image-upload" name="thumbnail" accept="image/*">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              
                              <!-- this portion will be generated theme wise from the theme-config.json file Ends-->
    
                            </div> <!-- end row -->
                          </div>
                          <div class="tab-pane" id="seo">
                            <div class="row justify-content-center">
                              <div class="col-xl-8">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="website_keywords">Meta keywords</label>
                                  <div class="col-md-10">
                                    <input type="text" class="form-control bootstrap-tag-input" id="meta_keywords" name="meta_keyword" value="{{$courses->meta_keyword}}" data-role="tagsinput" style="width: 100%;display:block !important;" placeholder="Write a keyword and then press enter button" .="">
                                   
                                  </div>
                                  <style>
                                    .bootstrap-tagsinput{
                                      display: none;
                                    }
                                    #meta_keywords{
                                      display: block !important;
                                    }
                                  </style>
                                </div>
                              </div> <!-- end col -->
                              <div class="col-xl-8">
                                <div class="form-group row mb-3">
                                  <label class="col-md-2 col-form-label" for="meta_description">Meta description</label>
                                  <div class="col-md-10">
                                    <textarea name="meta_desc" class="form-control">{{$courses->meta_desc}}</textarea>
                                  </div>
                                </div>
                              </div> <!-- end col -->
                            </div> <!-- end row -->
                          </div>
                          <div class="tab-pane" id="finish">
                            <div class="row">
                              <div class="col-12">
                                <div class="text-center">
                                  <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                  <h3 class="mt-0">Thank you !</h3>
    
                                  <p class="w-75 mb-2 mx-auto">You are just one click away</p>
    
                                  <div class="mb-3 mt-3">
                                    <button type="submit" class="btn btn-primary text-center" onclick="checkRequiredFields()">Submit</button>
                                  </div>
                                </div>
                              </div> <!-- end col -->
                            </div> <!-- end row -->
                          </div>
    
                          <ul class="list-inline mb-0 wizard text-center">
                            <li class="previous list-inline-item disabled">
                              <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-left-bold"></i> </a>
                            </li>
                            <li class="next list-inline-item">
                              <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-right-bold"></i> </a>
                            </li>
                          </ul>
    
                        </div> <!-- tab-content -->
                      </div> <!-- end #progressbarwizard-->
                    </form>
                </div>
              </div><!-- end row-->
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div>
      </div>
  
      <script type="text/javascript">
        $(document).ready(function()
        {
          initSummerNote(['#description']);
          togglePriceFields('is_free_course');
        });
      </script>
  
      <script type="text/javascript">
        var blank_outcome = jQuery('#blank_outcome_field').html();
        var blank_requirement = jQuery('#blank_requirement_field').html();
        jQuery(document).ready(function()
        {
          jQuery('#blank_outcome_field').hide();
          jQuery('#blank_requirement_field').hide();
          calculateDiscountPercentage($('#discounted_price').val());
        });
  
        function appendOutcome()
        {
          jQuery('#outcomes_area').append(blank_outcome);
        }
  
        function removeOutcome(outcomeElem)
        {
          jQuery(outcomeElem).parent().parent().remove();
        }
  
        function appendRequirement()
        {
          jQuery('#requirement_area').append(blank_requirement);
        }
  
        function removeRequirement(requirementElem)
        {
          jQuery(requirementElem).parent().parent().remove();
        }
  
        function ajax_get_sub_category(category_id)
        {
          console.log(category_id);
          $.ajax(
          {
            url: 'https://demo.academy-lms.com/academy/admin/ajax_get_sub_category/' + category_id,
            success: function(response)
            {
              jQuery('#sub_category_id').html(response);
            }
          });
        }
  
        function priceChecked(elem)
        {
          if (jQuery('#discountCheckbox').is(':checked'))
          {
  
            jQuery('#discountCheckbox').prop("checked", false);
          }
          else
          {
  
            jQuery('#discountCheckbox').prop("checked", true);
          }
        }
  
        function topCourseChecked(elem)
        {
          if (jQuery('#isTopCourseCheckbox').is(':checked'))
          {
  
            jQuery('#isTopCourseCheckbox').prop("checked", false);
          }
          else
          {
  
            jQuery('#isTopCourseCheckbox').prop("checked", true);
          }
        }
  
        function isFreeCourseChecked(elem)
        {
  
          if (jQuery('#' + elem.id).is(':checked'))
          {
            $('#price').prop('required', false);
          }
          else
          {
            $('#price').prop('required', true);
          }
        }
  
        function calculateDiscountPercentage(discounted_price)
        {
          if (discounted_price > 0)
          {
            var actualPrice = jQuery('#price').val();
            if (actualPrice > 0)
            {
              var reducedPrice = actualPrice - discounted_price;
              var discountedPercentage = (reducedPrice / actualPrice) * 100;
              if (discountedPercentage > 0)
              {
                jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + "%");
  
              }
              else
              {
                jQuery('#discounted_percentage').text('0%');
              }
            }
          }
        }
  
        $('.on-hover-action').mouseenter(function()
        {
          var id = this.id;
          $('#widgets-of-' + id).show();
        });
        $('.on-hover-action').mouseleave(function()
        {
          var id = this.id;
          $('#widgets-of-' + id).hide();
        });
      </script>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

  <style>
    #audio{
      display: none;
    }
    #video{
      display: none;
    }
  </style>
  <script>
  // function audiofile(sel) {
  //   alert(sel.options[sel.selectedIndex].text);
  // }
  
  
  function audiofile(sel){
    var audios = document.getElementById("audio");
    var videos = document.getElementById("video");
   var category = sel.options[sel.selectedIndex].text;
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