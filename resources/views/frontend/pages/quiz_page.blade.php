<!DOCTYPE html>
<html lang="en">

<head>

  <title>{{$lessons->title}} | Academy</title>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Creativeitem" />

  <meta name="keywords" content="LMS,Learning Management System,Creativeitem,demo,hello,How are you" />
  <meta name="description" content="Nice application" />

  <link name="favicon" type="image/x-icon" href="{{asset('frontend/uploads/system/favicon.png')}}" rel="shortcut icon" />
  <link rel="favicon" href="{{asset('assets/frontend/default/img/icons/favicon.ico')}}">
<link rel="apple-touch-icon" href="{{asset('assets/frontend/default/img/icons/icon.png')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/jquery.webui-popover.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/slick-theme.css')}}">
  <!-- font awesome 5 -->
  <link rel="stylesheet" href="{{asset('assets/frontend/default/css/fontawesome-all.min.css')}}">

 
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/default/css/responsive.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/global/toastr/toastr.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
  <script src="{{asset('assets/backend/js/jquery-3.3.1.min.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dripicons/2.0.0/webfont.css" integrity="sha512-uws2d1mzntk5UyAzfDcNN9wAN3OoSsztsVfUzRvq+DOMZYgUZH6HJ97g4y2Nk6TvDlIdd0GBuDjaZ74DoASdig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dripicons/2.0.0/webfont.min.css" integrity="sha512-pi7KSLdGMxSE62WWJ62B1R5/H7WNnIsj2f51MikplRt31K0uCZ1lfPSw/0Jb1flSz6Ed2YLSlox6Uulf7CaFiA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://pictogrammers.github.io/@mdi/font/2.0.46/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/5fe4a5af8f.js" crossorigin="anonymous"></script>

  <!-- Lesson page specific styles are here -->
  <style type="text/css">
    body
    {
      background-color: #fff !important;
    }

    .card
    {
      border-radius: 0px !important;
      background-color: #f7f8fa !important;
      border: 0px !important;
    }

    .course_card
    {
      padding: 0px;
      background-color: #F7F8FA;
    }

    .course_container
    {
      background-color: #fff !important;
    }

    .course_col
    {
      padding: 0px;
    }

    .course_header_col
    {
      background-color: #29303b;
      color: #fff;
      padding: 15px 10px 10px;
    }

    .course_header_col img
    {
      padding: 0px 0px;
    }

    .course_btn
    {
      color: #95979a;
      border: 1px solid #95979a;
      padding: 7px 10px;
    }

    .course_btn:hover
    {
      color: #fff;
      border: 1px solid #fff;
    }

    .lesson_duration
    {
      border-radius: 5px;
      padding-top: 8px;
      color: #5C5D61;
      font-size: 13px;
      font-weight: 100;
    }

    .quiz-card
    {
      border: 1px solid #dcdddf !important;
    }

    .bg-quiz-result-info
    {
      background-color: #007791 !important;
      padding: 13px !important;
    }
  </style>
</head>

<body class="gray-bg">
  <div class="container-fluid course_container">
    <!-- Top bar -->
    <div class="row">
      <div class="col-lg-9 course_header_col">
        <h5>
          <img src="https://demo.academy-lms.com/default/uploads/system/logo-light-sm.png" height="25"> |
          {{$lessons->title}}
        </h5>
      </div>
     
      <div class="col-lg-3 course_header_col">
        
        <a href="/my_courses" class="course_btn"> <i class="fa fa-chevron-left"></i> My Lessons</a>
        <a href="/course-detail/{{$lessons->course_id}}" class="course_btn">Lessons details <i class="fa fa-chevron-right"></i></a>
      </div>

    </div>


    <div class="row" id="lesson-container">
      <!-- Course content, video, quizes, files starts-->
      <div class="col-lg-9  order-md-1 course_col" id="video_player_area">
        <!-- <div class="" style="background-color: #333;"> -->
        <div class="" style="text-align: center;">
          <div class="mt-5">
            <div id="quiz-body">
              <div class="" id="quiz-header">
                Quiz title : <strong>{{$quiz->title}}</strong><br>
                {{-- Number of questions : <strong>{{$question = App\QuizQuestion::where('quiz_id',$quiz->id)->count()}}</strong><br> --}}
                <button type="button" name="button" class="btn btn-sign-up mt-2" style="color: #fff;" onclick="getStarted(1)">Get started</button>
              </div>
      
              <form class="" id="quiz_form" action="" method="post">
                <input type="hidden" name="lesson_id" value="300">
                <div class="hidden" id="question-number-1">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
@foreach (App\Models\QuizQuestion::where('quiz_id',$quiz->id)->get() as $question)
    

                        <div class="card text-left quiz-card">
                        <div class="card-body">
                          <h6 class="card-title">Question  : <strong>{{$question->title}}?</strong></h6>
                        </div>
                        <ul class="list-group list-group-flush">
                          @if ($course->category == 'Speaking')
                       
                        @foreach (App\Models\QuestionOptions::where('quiz_id',$question->id)->get() as $option)
                       
                            <li class="list-group-item quiz-options">
                            <div class="form-check">
                              <label class="form-check-label" for="quiz-id-{{$question->id}}-option-id-{{$option->id}}">
                                {{$option->options}} </label>
                            </div>
                          </li>
                          @endforeach
                          @else
                              

                          @foreach (App\Models\QuestionOptions::where('quiz_id',$question->id)->get() as $option)
                       
                          <li class="list-group-item quiz-options">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="25[]" value="{{$option->options}}" id="quiz-ids" onclick="enableNextButton('25')">
                            <label class="form-check-label" for="quiz-id-{{$question->id}}-option-id-{{$option->id}}">
                              {{$option->options}} </label>
                          </div>
                        </li>
                        @endforeach


                          @endif
                        </ul>
                        
                      </div>
                      <br>
                      @endforeach

                      @if ($course->category == 'Speaking')
                      <div class="input-single">
                        <input id="note-textarea" type="hidden" placeholder="Create a new note by typing or using voice recognition." value="" >
                    </div>         
                    <button id="start-record-btn" class="btn btn-sign-up mt-2 mb-2" title="Start Recording" type="button">Start Recognition</button>
                   @else

                   @endif
                    </div>
                  </div>
                  <button type="button" name="button" class="btn btn-sign-up mt-2 mb-2" id="next-btn-25" style="color: #fff;" onclick="submitQuiz()" disabled="">Check result</button>
                </div>
              </form>
            </div>
            <script>

            </script>
            <style>
                #quiz-result{
                    display: none;
                }
            </style>
            <div id="quiz-result" class="text-left">
              <div class="row">
                    <div class="col-lg-12">
                        <div class="card text-white bg-quiz-result-info mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Review the course materials to expand your learning.</h5>
                                <p class="card-text" id="correct-tag">You got 1 Out of 1 Correct .</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="card text-left card-with-no-color-no-border">
                            <div class="card-body">
                                <h6 class="card-title" ><img id="wrong" src="https://www.creativeitemdemo.com/academy/assets/frontend/default/img/green-tick.png" alt="" height="15px;"> {{$quiz->title}}</h6>
                                                    <p class="card-text"> -
                                @foreach (App\Models\QuizQuestion::where('quiz_id',$quiz->id)->get() as $question)
                                @foreach (App\Models\CorrectAnswer::where('quiz_id',$question->id)->get() as $opt)
                                    <span style="display: none" id="correct">{{$opt->correct_answer}}</span>
                                @endforeach                        
                                @endforeach              
                                <img src="https://default.academy-lms.com/assets/frontend/default/img/green-circle-tick.png" alt="" height="15px;">
                                    </p>
                                                <p class="card-text"> <strong>Submitted answers: </strong> [
                                    <span id="submit_ans">Fixed tags defined by the language</span>                    ]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="javascript::" name="button" class="btn btn-sign-up mt-2" id="take_again" style="color: #fff;display:none" onclick="location.reload();">Take again</a>
          
                   @foreach (App\Models\Lesson::where('id','>',$lessons->id)->where('course_id',$quiz->course_id)->get() as $item)
                        
                    <a href="/lesson/{{$item->id}}" name="button" class="btn btn-sign-up mt-2" id="next_lesson" style="color: #fff;display:none">Move To Next Lesson</a>
                
                    @endforeach
                   
                  </div>
             
            </div>
            
            
            <?php 
            $course = DB::table("courses")->where('id',$lessons->course_id)->first();
            ?>
            
      @if($course->category == 'Listening')
            <script type="text/javascript">
              function getStarted(first_quiz_question)
              {
                $('#quiz-header').hide();
                $('#lesson-summary').hide();
                $('#question-number-' + first_quiz_question).show();
              }
      
              function showNextQuestion(next_question)
              {
                $('#question-number-' + (next_question - 1)).hide();
                $('#question-number-' + next_question).show();
              }
      
              function submitQuiz()
              {
                // $.ajax(
                // {
                //   url: 'https://default.academy-lms.com/home/submit_quiz',
                //   type: 'post',
                //   data: $('form#quiz_form').serialize(),
                //   success: function(response)
                //   {
                //     $('#quiz-body').hide();
                //     $('#quiz-result').html(response);
                //   }
                // });


                var result = document.getElementById("quiz-result");
                var body = document.getElementById("quiz-body");
                result.style.display = "block";
                body.style.display = "none";
              }




              $("#quiz_form input[type=radio]").change(function () {
                //alert( $(this).val() );
              
                $("#submit_ans").html($(this).val());
                
                if($(this).val() == $('#correct').html()){
                    $('#wrong').attr('src','https://www.creativeitemdemo.com/academy/assets/frontend/default/img/green-tick.png');
                    $('#correct-tag').html('You got 1 Out of 1 Correct .');
                    $('#take_again').css('display','initial');
                    $('#next_lesson').css('display','initial');
                }else {
                    $('#wrong').attr('src','https://default.academy-lms.com/assets/frontend/default/img/red-cross.png');
                    $('#correct-tag').html('You got 0 Out of 1 Correct .');
                    $('#take_again').css('display','initial');
                }

});


              function enableNextButton(quizID)
              {
                $('#next-btn-' + quizID).prop('disabled', false);
                
              }
            </script>
            
            
            
            
            @else
            
            <script type="text/javascript">
                              function getStarted(first_quiz_question)
              {
                $('#quiz-header').hide();
                $('#lesson-summary').hide();
                $('#question-number-' + first_quiz_question).show();
              }
      
              function showNextQuestion(next_question)
              {
                $('#question-number-' + (next_question - 1)).hide();
                $('#question-number-' + next_question).show();
              }
      
              function submitQuiz()
              {
            

                var result = document.getElementById("quiz-result");
                var body = document.getElementById("quiz-body");
                result.style.display = "block";
                body.style.display = "none";
              }


              $("#next-btn-25").click(function () {
                //alert( $(this).val() );
              
                //$("#submit_ans").html($(this).val());
                $("#submit_ans").html($('#note-textarea').val());
               if($('#note-textarea').val() == $('#correct').html()){
                  $('#wrong').attr('src','https://www.creativeitemdemo.com/academy/assets/frontend/default/img/green-tick.png');
                    $('#correct-tag').html('You got 1 Out of 1 Correct .');
                    $('#take_again').css('display','initial');
                    $('#next_lesson').css('display','initial');
                }
                else{
                    $('#wrong').attr('src','https://default.academy-lms.com/assets/frontend/default/img/red-cross.png');
                    $('#correct-tag').html('You got 0 Out of 1 Correct .');
                    $('#take_again').css('display','initial');
                }

});

              function enableNextButton(quizID)
              {
                $('#next-btn-' + quizID).prop('disabled', false);
                
              }
            </script>
            
            @endif
          </div>
        </div>
      
        <div class="" style="margin: 20px 0;" id="lesson-summary">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Instruction:</h5>
              <p class="card-text">{{$quiz->instruction}}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Course content, video, quizes, files ends-->

      <!-- Course sections and lesson selector sidebar starts-->
      
      <div class="col-lg-3  order-md-2 course_col" >
        <div class="text-center" style="margin: 12px 10px;">
          <h5>Lessons content</h5>
        </div>
        <div class="row" style="margin: 12px -1px">
          <div class="col-12">
            <ul class="nav nav-tabs" id="lessonTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="listening" aria-selected="true">Exercises</a>
              </li>
              <!-- ZOOM LIVE CLASS TAB STARTS -->
              <!-- ZOOM LIVE CLASS TAB ENDS -->

              <!-- CERTIFICATE TAB -->
              <!-- CERTIFICATE TAB -->
            </ul>
            <div class="tab-content" >
              <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
                <!-- Lesson Content starts from here -->
                <div class="accordion" >
                  <div class="card" style="margin:0px 0px;">
                   

                    <div id="collapse-52" class="collapse show" aria-labelledby="heading-52" data-parent="#accordionExample">
                      <div class="card-body" style="padding:0px;">
                        <table style="width: 100%;">

                            {{-- @foreach (App\Lesson::where('course_id',$lessons->course_id)->get() as $lesson)
                          
                            <tr style="width: 100%; padding: 5px 0px;background-color: #E6F2F5;">
                                <td style="text-align: left; padding:7px 10px;">
                                  <div class="form-group">
                                    <input type="checkbox" id="{{$lesson->id}}" onchange="markThisLessonAsCompleted(this.id);" value="1">
                                    <label for=""></label>
                                  </div>
                              
                                  <a href="/lesson/{{$lesson->id}}" id="{{$lesson->id}}" style="color: #444549;font-size: 14px;font-weight: 400;">
                                    <i class="far fa-play-circle"></i> :
                                    {{$lesson->title}}  </a>
                              
                                  <div class="lesson_duration">
                                    <i class="fas fa-play"></i>
                                    {{$lesson->web_duration}} Min
                                  </div>
                                </td>
                              </tr>
                            @endforeach --}}
                            <style>
                                .active{
                                    background: black
                                }
                            </style>
                            @foreach (App\Models\Lesson::where('course_id',$lessons->course_id)->get() as $lesson)
                            @if ($lessons->id == $lesson->id)
                          <tr style="width: 100%; padding: 5px 0px;background-color: #fff;" 
                         
                          >
                            <td style="text-align: left; padding:7px 10px;">
                              <div class="form-group">
                                
                                <label for="124"></label>
                              </div>

                              <a href="/lesson/{{$lesson->id}}" id="{{$lesson->id}}" style="color: #444549;font-size: 14px;font-weight: 400;">
                                <i class="fas fa-play"></i> :
                                 {{$lesson->title}} </a>

                              <div class="lesson_duration">
                                <i class="far fa-play-circle"></i>
                                {{$lesson->web_duration}} Min
                              </div>
                            </td>
                          </tr>
                          @else

                          <tr style="width: 100%; padding: 5px 0px;background-color: rgb(228, 228, 228);" >
                            <td style="text-align: left; padding:7px 10px;">
                              <div class="form-group">
                                
                                <label for="124"></label>
                              </div>

                              <a href="/lesson/{{$lesson->id}}" id="{{$lesson->id}}" style="color: #444549;font-size: 14px;font-weight: 400;pointer-events: none">
                                <i class="fas fa-play"></i> :
                                 {{$lesson->title}} </a>

                              <div class="lesson_duration">
                                <i class="far fa-play-circle"></i>
                                {{$lesson->web_duration}} Min
                              </div>
                            </td>
                          </tr>

                          @endif
                          @foreach (App\Models\Quiz::where('exercise',$lesson->id)->get() as $quiz)
                          @if ($lessons->id == $lesson->id)
                          <tr style="width: 100%; padding: 5px 0px;background-color: #fff;">
                            <td style="text-align: left; padding:7px 10px;">
                              <div class="form-group">
                                
                                <label for="124"></label>
                              </div>

                              <a href="/quiz/{{$quiz->id}}" id="{{$quiz->id}}" style="color: #444549;font-size: 14px;font-weight: 400;">
                                <i class="fas fa-question"></i> :
                                 {{$quiz->title}} </a>

                              <div class="lesson_duration">
                                <i class="far fa-question-circle"></i>
                                Quiz
                              </div>
                            </td>
                          </tr>
                          @else
                          <tr style="width: 100%; padding: 5px 0px;background-color: rgb(228, 228, 228);">
                            <td style="text-align: left; padding:7px 10px;">
                              <div class="form-group">
                                
                                <label for="124"></label>
                              </div>

                              <a href="/quiz/{{$quiz->id}}" id="{{$quiz->id}}" style="color: #444549;font-size: 14px;font-weight: 400;pointer-events: none">
                                <i class="fas fa-question"></i> :
                                 {{$quiz->title}} </a>

                              <div class="lesson_duration">
                                <i class="far fa-question-circle"></i>
                                Quiz
                              </div>
                            </td>
                          </tr>
                          @endif
 
                          @endforeach
                          @endforeach
                      

                        </table>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- Lesson Content ends from here -->
              </div>
              <!-- ZOOM LIVE CLASS TAB STARTS-->
              <!-- ZOOM LIVE CLASS TAB ENDS-->

            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function()
        {
          checkCertificateEligibility();
        });

        function toggleAccordionIcon(elem, section_id)
        {
          var accordion_section_ids = [];
          $(".accordion_icon").each(function()
          {
            accordion_section_ids.push(this.id);
          });
          accordion_section_ids.forEach(function(item)
          {
            if (item === 'accordion_icon_' + section_id)
            {
              if ($('#' + item).html().trim() === '<i class="fa fa-plus"></i>')
              {
                $('#' + item).html('<i class="fa fa-minus"></i>')
              }
              else
              {
                $('#' + item).html('<i class="fa fa-plus"></i>')
              }
            }
            else
            {
              $('#' + item).html('<i class="fa fa-plus"></i>')
            }
          });
        }



        function checkCourseProgression()
        {
          $.ajax(
          {
            url: 'https://demo.academy-lms.com/default/home/check_course_progress/26',
            success: function(response)
            {
              if (parseInt(response) === 100)
              {
                $('#download_certificate_area').show();
                $('#certificate-alert-success').show();
                $('#certificate-alert-warning').hide();
              }
              else
              {
                $('#download_certificate_area').hide();
                $('#certificate-alert-success').hide();
                $('#certificate-alert-warning').show();
              }
              $('#progression').text(Math.round(response));
              $('#course_progress_area').attr('data-percent', Math.round(response));
              initProgressBar(Math.round(response));
            }
          });
        }

        function initProgressBar(dataPercent)
        {
          console.log("Data Percent" + dataPercent);
          var totalProgress, progress;
          const circles = document.querySelectorAll('.circular-progress');
          for (var i = 0; i < circles.length; i++)
          {
            totalProgress = circles[i].querySelector('circle').getAttribute('stroke-dasharray');
            //progress = circles[i].parentElement.getAttribute('data-percent');
            progress = dataPercent;

            circles[i].querySelector('.bar').style['stroke-dashoffset'] = totalProgress * progress / 100;
          }
        }

        function getCertificateShareableUrl()
        {
          var user_id = '3';
          var course_id = '26';
          $.ajax(
          {
            url: 'https://demo.academy-lms.com/default/addons/certificate/get_certificate_url',
            type: 'POST',
            data:
            {
              user_id: user_id,
              course_id: course_id
            },
            success: function(response)
            {
              $('#certificate_download_btn').attr('href', response);
            }
          });
        }

        function sendCourseCompletionMail()
        {
          var user_id = '3';
          var course_id = '26';
          $.ajax(
          {
            url: 'https://demo.academy-lms.com/default/addons/certificate/send_course_completion_mail',
            type: 'POST',
            data:
            {
              user_id: user_id,
              course_id: course_id
            },
            success: function(response)
            {
              console.log(response);
            }
          });
        }
      </script>
      <!-- Course sections and lesson selector sidebar ends-->
    </div>


    <div class="row my-4">
      <div class="col-lg-9">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <ul class="nav nav-tabs border-0">
            </ul>
          </div>
          <!--load body with ajax for any addon. First load course forum addon if exits or elseif-->
          <div class="col-md-12 p-4" id="load-tabs-body">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{asset('js/speech.js')}}"></script>
        <!-- Only used for the demos ads. Please ignore and remove. --> 

  <script src="{{asset('assets/frontend/default/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/vendor/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/slick.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/multi-step-modal.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/jquery.webui-popover.min.js')}}"></script>
  <script src="https://content.jwplatform.com/libraries/O7BMTay5.js"></script>
  <script src="{{asset('assets/frontend/default/js/main.js')}}"></script>
  <script src="{{asset('assets/global/toastr/toastr.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
  <script src="{{asset('assets/frontend/default/js/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{asset('assets/frontend/default/js/custom.js')}}"></script>
  
  <script>
    function toggle_lesson_view()
    {
      $('#lesson-container').toggleClass('justify-content-center');
      $("#video_player_area").toggleClass("order-md-1");
      $("#lesson_list_area").toggleClass("col-lg-5 order-md-1");
    }
  </script>
  <script type="text/javascript">
    //saving the current progress and starting from the saved progress
    var newProgress;
    var savedProgress;
    var currentProgress = '0';
    var lessonType = 'video';
    var videoProvider = 'YouTube';

    function markThisLessonAsCompleted(lesson_id)
    {
      $('#lesson_list_area').hide();
      $('#lesson_list_loader').show();
      var progress;
      if ($('input#' + lesson_id).is(':checked'))
      {
        progress = 1;
      }
      else
      {
        progress = 0;
      }
      $.ajax(
      {
        type: 'POST',
        url: 'https://demo.academy-lms.com/default/user/save_course_progress',
        data:
        {
          lesson_id: lesson_id,
          progress: progress
        },
        success: function(response)
        {
          currentProgress = response;
          $('#lesson_list_area').show();
          $('#lesson_list_loader').hide();
        }
      });
    }


    var timer = setInterval(function()
    {
      console.log('Current Progress is ' + currentProgress);
      if (lessonType == 'video' && videoProvider == 'html5' && currentProgress != 1)
      {
        getCurrentTime();
      }
    }, 1000);

    $(document).ready(function()
    {
      if (lessonType == 'video' && videoProvider == 'html5')
      {
        var totalDuration = document.querySelector('#player').duration;

        if (currentProgress == 1 || currentProgress == totalDuration)
        {
          document.querySelector('#player').currentTime = 0;
        }
        else
        {
          document.querySelector('#player').currentTime = currentProgress;
        }
      }
    });
    var counter = 0;
    player.on('canplay', event =>
    {
      if (counter == 0)
      {
        if (currentProgress == 1)
        {
          document.querySelector('#player').currentTime = 0;
        }
        else
        {
          document.querySelector('#player').currentTime = currentProgress;
        }
      }
      counter++;
    });

    function getCurrentTime()
    {
      var lesson_id = '123';
      newProgress = document.querySelector('#player').currentTime;
      var totalDuration = document.querySelector('#player').duration;

      console.log('Current Progress is ' + currentProgress);
      console.log('New Progress is ' + newProgress);

      if (newProgress != savedProgress && newProgress > 0 && currentProgress != 1)
      {

        // if the user watches the entire video the lesson will be marked as seen automatically.
        if (totalDuration == newProgress)
        {
          newProgress = 1;
          $('input#' + lesson_id).prop('checked', true);
        }

        // update the video prgress here.
        $.ajax(
        {
          type: 'POST',
          url: 'https://demo.academy-lms.com/default/user/save_course_progress',
          data:
          {
            lesson_id: lesson_id,
            progress: newProgress
          },
          success: function(response)
          {
            savedProgress = response;
          }
        });
      }
    }
  </script>
  <link rel="stylesheet" type="text/css" href="https://demo.academy-lms.com/default/assets/frontend/eu-cookie/purecookie.css" async />

  
  <script>
    window.fbAsyncInit = function()
    {
      FB.init(
      {
        xfbml: true,
        version: 'v5.0'
      });
    };

    (function(d, s, id)
    {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat" attribution=setup_tool page_id="514232388637666" theme_color="#0084ff"></div>
  <!-- Load Facebook SDK for JavaScript ends-->

  <!--=============== GOOGLE ANALYTICS WIDGET ================-->

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-61394417-1']);
    _gaq.push(['_trackPageview']);

    (function()
    {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

  <!--=============== GOOGLE ANALYTICS WIDGET ================-->

  
</body>

</html>