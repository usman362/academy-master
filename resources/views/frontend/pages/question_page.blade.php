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

          <!-- If the video is youtube video -->
          <!------------- PLYR.IO ------------>
          <link rel="stylesheet" href="https://demo.academy-lms.com/default/assets/global/plyr/plyr.css">

          <video class="" id="player">
            {{-- <iframe height="500" src="{{$course->url}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe> --}}
            <source height="500" src="{{asset('Video/Lesson/'.$lessons->video_file)}}" type="">
          </video>                     
          <audio controls>
            <source src="{{asset('Audio/Lesson/'.$lessons->audio_file)}}">
         
          </audio>
          <script src="https://demo.academy-lms.com/default/assets/global/plyr/plyr.js"></script>
          <script>
            const player = new Plyr('#player');
          </script>
          <!------------- PLYR.IO ------------>

          <!-- If the video is vimeo video -->
        </div>

        <div class="" style="margin: 20px 0;" id="lesson-summary">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Note:</h5>
              <p class="card-text">{{$lessons->summary}}</p>
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

                            {{-- @foreach (App\Models\Lesson::where('course_id',$lessons->course_id)->get() as $lesson)
                          
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
                          
                          <tr style="width: 100%; padding: 5px 0px;background-color: #fff;" 
                         {{  request()->url('lesson/4') ? 'class=active' : '' }}
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

  <div class="cookieConsentContainer" id="cookieConsentContainer" style="opacity: .9; display: block; display: none;">
    <!-- <div class="cookieTitle">
    <a>Cookies.</a>
  </div> -->
    <div class="cookieDesc">
      <p>
        This website uses cookies to personalize content and analyse traffic in order to offer you a better experience. <a class="link-cookie-policy" href="https://demo.academy-lms.com/default/home/cookie_policy">Cookie policy</a>
      </p>
    </div>
    <div class="cookieButton">
      <a onclick="cookieAccept();">Accept</a>
    </div>
  </div>
  <script>
    $(document).ready(function()
    {
      if (localStorage.getItem("accept_cookie_academy"))
      {
        //localStorage.removeItem("accept_cookie_academy");
      }
      else
      {
        $('#cookieConsentContainer').fadeIn(1000);
      }
    });

    function cookieAccept()
    {
      if (typeof(Storage) !== "undefined")
      {
        localStorage.setItem("accept_cookie_academy", true);
        localStorage.setItem("accept_cookie_time", "05/27/2021");
        $('#cookieConsentContainer').fadeOut(1200);
      }
    }
  </script>

  <!-- envato sales notification -->
  <script>
    var start_time = 2000
    var end_time = 8000
  </script>

  <style>
      body{
          overflow-x: hidden
      }
    .sales_notification
    {
      position: fixed;
      left: 20px;
      bottom: 20px;
      z-index: 10000;
      background-color: #ffffff;
      box-shadow: 1px 1px 15px 2px rgba(0, 0, 0, .15);
      padding: 5px 10px 0px 10px;
      border-radius: 10px;
      display: none;
    }
  </style>


  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_3">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Ozark, United States </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Learning Management System </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 7 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_3()
    {
      $("#sales_notification_3").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_3, start_time);

    function hide_sales_3()
    {
      $("#sales_notification_3").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_3, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_5">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Paris, United States </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Learning Management System </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 12 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_5()
    {
      $("#sales_notification_5").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_5, start_time);

    function hide_sales_5()
    {
      $("#sales_notification_5").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_5, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_9">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Harrogate, United Kingdom </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Amazon S3 Hosting Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 15 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_9()
    {
      $("#sales_notification_9").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_9, start_time);

    function hide_sales_9()
    {
      $("#sales_notification_9").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_9, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_11">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Jaboatão, Brazil </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Live Streaming Class Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 15 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_11()
    {
      $("#sales_notification_11").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_11, start_time);

    function hide_sales_11()
    {
      $("#sales_notification_11").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_11, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_13">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                MILANO, Italy </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Learning Management System </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 16 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_13()
    {
      $("#sales_notification_13").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_13, start_time);

    function hide_sales_13()
    {
      $("#sales_notification_13").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_13, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_15">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Harrogate, United Kingdom </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Elegant - Academy LMS Theme </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 17 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_15()
    {
      $("#sales_notification_15").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_15, start_time);

    function hide_sales_15()
    {
      $("#sales_notification_15").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_15, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_17">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                istanbul, Turkey </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Offline Payment Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 18 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_17()
    {
      $("#sales_notification_17").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_17, start_time);

    function hide_sales_17()
    {
      $("#sales_notification_17").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_17, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_19">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                istanbul, Turkey </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Learning Management System </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 18 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_19()
    {
      $("#sales_notification_19").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_19, start_time);

    function hide_sales_19()
    {
      $("#sales_notification_19").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_19, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_22">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                chicago, United States </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Lms Student Mobile App - Flutter iOS & Android </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 23 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_22()
    {
      $("#sales_notification_22").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_22, start_time);

    function hide_sales_22()
    {
      $("#sales_notification_22").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_22, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_24">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                chicago, United States </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Certificate Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 23 hours ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_24()
    {
      $("#sales_notification_24").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_24, start_time);

    function hide_sales_24()
    {
      $("#sales_notification_24").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_24, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_26">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Nollamara, Australia </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Elegant - Academy LMS Theme </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 1 day ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_26()
    {
      $("#sales_notification_26").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_26, start_time);

    function hide_sales_26()
    {
      $("#sales_notification_26").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_26, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_28">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Nollamara, Australia </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy Learning Management System </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 1 day ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_28()
    {
      $("#sales_notification_28").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_28, start_time);

    function hide_sales_28()
    {
      $("#sales_notification_28").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_28, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_30">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Jakarta Utara, Indonesia </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Live Streaming Class Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 1 day ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_30()
    {
      $("#sales_notification_30").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_30, start_time);

    function hide_sales_30()
    {
      $("#sales_notification_30").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_30, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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

  <a href="https://1.envato.market/B32Ry" target="_blank">
    <div class="sales_notification" id="sales_notification_32">

      <table>
        <tr>
          <td>
            <img src="{{asset('frontend/uploads/item_thumb/envato.png')}}" style="height: 60px;padding: 5px 8px 10px 3px;" />
          </td>
          <td>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; font-style: italic; color: #4E5565;">Purchased from&nbsp;</span>
              <span style="font-size: 11px; font-weight: 600; color: #4E5565;">
                Bangkok, Thailand </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;"> </span>
              <span style="font-size: 11px; color: #A8AFBF; font-weight: 500;">
                Academy LMS Certificate Addon </span>
            </div>
            <div style="line-height: 15px;">
              <span style="font-size: 10px; color: #A8AFBF;">about 1 day ago</span>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </a>



  <script>
    // SALES NOTIFICATION CODE STARTS
    function show_sales_32()
    {
      $("#sales_notification_32").fadeIn("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(show_sales_32, start_time);

    function hide_sales_32()
    {
      $("#sales_notification_32").fadeOut("fast", function()
      {
        // Animation complete
      });
    }
    setTimeout(hide_sales_32, end_time);

    console.log('start : ' + start_time)
    console.log('end : ' + end_time)
    start_time += 8000;
    end_time += 8000;


    jQuery(window).bind('load', function()
    {
      setTimeout(() =>
      {
        jQuery.ajax(
        {
          url: 'https://demo.academy-lms.com/default/sales/data',
          type: "POST",
          success: function(data)
          {
            // console.log(data);
          }
        });
      }, 2000);
    });
    // SALES NOTIFICATION CODE ENDS
  </script>

  <!-- FACEBOOK PIXEL WIDGETS STARTS -->
  <script>
    ! function(f, b, e, v, n, t, s)
    {
      if (f.fbq) return;
      n = f.fbq = function()
      {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '131909095376592');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131909095376592&ev=PageView&noscript=1" />
  </noscript>
  <!-- FACEBOOK PIXEL WIDGETS ENDS -->

  <!-- Load Facebook SDK for JavaScript starts-->
  <div id="fb-root"></div>
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