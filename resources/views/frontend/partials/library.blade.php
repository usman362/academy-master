<!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true" reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content edit-rating-modal">
        <div class="modal-header">
          <h5 class="modal-title step-1" data-step="1">Step 1</h5>
          <h5 class="modal-title step-2" data-step="2">Step 2</h5>
          <h5 class="m-progress-stats modal-title">
            &nbsp;of&nbsp;<span class="m-progress-total"></span>
          </h5>
  
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="m-progress-bar-wrapper">
          <div class="m-progress-bar">
          </div>
        </div>
        <div class="modal-body step step-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="modal-rating-box">
                  <h4 class="rating-title">How would you rate this course overall?</h4>
                  <fieldset class="your-rating">
  
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class="full" for="star5"></label>
  
                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half" for="star4half"></label> -->
  
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class="full" for="star4"></label>
  
                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half" for="star3half"></label> -->
  
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class="full" for="star3"></label>
  
                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half" for="star2half"></label> -->
  
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class="full" for="star2"></label>
  
                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half" for="star1half"></label> -->
  
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class="full" for="star1"></label>
  
                    <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half" for="starhalf"></label> -->
  
                  </fieldset>
                </div>
              </div>
              <div class="col-md-6">
                <div class="modal-course-preview-box">
                  <div class="card">
                    <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                    <div class="card-body">
                      <h5 class="card-title" class="course_title_for_rating" id="course_title_1"></h5>
                      <p class="card-text" id="instructor_details">
  
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <div class="modal-body step step-2">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="modal-rating-comment-box">
                  <h4 class="rating-title">Write a public review</h4>
                  <textarea id="review_of_a_course" name="review_of_a_course" placeholder="Describe your experience what you got out of the course and other helpful highlights. What did the instructor do well and what could use some improvement?" maxlength="65000" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="modal-course-preview-box">
                  <div class="card">
                    <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                    <div class="card-body">
                      <h5 class="card-title" class="course_title_for_rating" id="course_title_2"></h5>
                      <p class="card-text">
                        -
                        John Doe </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" name="course_id" id="course_id_for_rating" value="">
        <div class="modal-footer">
          <button type="button" class="btn btn-primary next step step-1" data-step="1" onclick="sendEvent(2)">Next</button>
          <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2" onclick="sendEvent(1)">Previous</button>
          <button type="button" class="btn btn-primary publish step step-2" onclick="publishRating($('#course_id_for_rating').val())" id="">Publish</button>
        </div>
      </div>
    </div>
  </div><!-- Modal -->
  
  <script type="text/javascript">
    function switch_language(language)
    {
      $.ajax(
      {
        url: 'https://demo.academy-lms.com/default/home/site_language',
        type: 'post',
        data:
        {
          language: language
        },
        success: function(response)
        {
          setTimeout(function()
          {
            location.reload();
          }, 500);
        }
      });
    }
  </script>
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
  
  <!-- SHOW TOASTR NOTIFIVATION -->
  
  
  <script type="text/javascript">
    function showAjaxModal(url)
    {
      // SHOWING AJAX PRELOADER IMAGE
      jQuery('#modal_ajax .modal-body').html('<div class="w-100 text-center pt-5"><img class="mt-5 mb-5" width="80px" src="https://demo.academy-lms.com/default/assets/global/gif/page-loader-2.gif"></div>');
  
      // LOADING THE AJAX MODAL
      jQuery('#modal_ajax').modal('show',
      {
        backdrop: 'true'
      });
  
      // SHOW AJAX RESPONSE ON REQUEST SUCCESS
      $.ajax(
      {
        url: url,
        success: function(response)
        {
          jQuery('#modal_ajax .modal-body').html(response);
        }
      });
    }
  </script>
  
  <!-- (Ajax Modal)-->
  <div class="modal fade" id="modal_ajax">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body" style="overflow:auto;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <script type="text/javascript">
    function confirm_modal(delete_url)
    {
      jQuery('#modal-4').modal('show',
      {
        backdrop: 'static'
      });
      document.getElementById('delete_link').setAttribute('href', delete_url);
    }
  </script>
  
  <!-- (Normal Modal)-->
  <div class="modal fade" id="modal-4">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top:100px;">
  
        <div class="modal-header">
          <h4 class="modal-title text-center">Are you sure ?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
  
  
        <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
          <a href="#" class="btn btn-danger btn-yes" id="delete_link" data-dismiss="modal">Yes</a>
          <button type="button" class="btn btn-info btn-cancel" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
  
  
  <script type="text/javascript">
    function async_modal()
    {
      const asyncModal = new Promise(function(resolve, reject)
      {
        $('#modal-4').modal('show');
        $('#modal-4 .btn-yes').click(function()
        {
          resolve(true);
        });
        $('#modal-4 .btn-cancel').click(function()
        {
          resolve(false);
        });
      });
      return asyncModal;
    }
  </script>
  <script type="text/javascript">
    function toggleRatingView(course_id)
    {
      $('#course_info_view_' + course_id).toggle();
      $('#course_rating_view_' + course_id).toggle();
      $('#edit_rating_btn_' + course_id).toggle();
      $('#cancel_rating_btn_' + course_id).toggle();
    }
  
    function publishRating(course_id)
    {
      var review = $('#review_of_a_course_' + course_id).val();
      var starRating = 0;
      starRating = $('#star_rating_of_course_' + course_id).val();
      if (starRating > 0)
      {
        $.ajax(
        {
          type: 'POST',
          url: 'https://demo.academy-lms.com/default/home/rate_course',
          data:
          {
            course_id: course_id,
            review: review,
            starRating: starRating
          },
          success: function(response)
          {
            location.reload();
          }
        });
      }
      else
      {
  
      }
    }
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