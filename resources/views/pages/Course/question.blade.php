@extends('layouts.app')
@section('content')
    
<div class="modal fade show" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true" style="display: block; padding-right: 17px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Manage quiz questions</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row" data-plugin="dragula" data-containers="[&quot;question-list&quot;]">
                    <div class="col-md-12">
                      <div class="bg-dragula p-2 p-lg-4">
                        <h5 class="mt-0">Question of: {{$quiz->title}} 
                        @if ($questions->count() != 1)
                        <a href="/addquestion/{{$quiz->id}}"><button type="button" class="btn btn-outline-primary btn-sm btn-rounded alignToTitle" name="button" >Add new question</button></a>
                        @else
                            
                        @endif  
                         
                        
                        </h5>
                        <div id="" class="py-2">
                            @foreach ($questions as $question)
                                
                          <!-- Item -->
                          <div class="card mb-0 mt-2 on-hover-action" id="{{$question->id}}">
                            <div class="card-body">
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mb-1 mt-0">{{$question->title}}? <span id="widgets-of-{{$question->id}}" class="widgets-of-quiz-question" style="display: none;">
                                      <a href="/deletequestion/{{$question->id}}" class="alignToTitle float-right ml-1 text-secondary"><i class="dripicons-cross"></i></a>
                                      <a href="/editquestion/{{$question->id}}" class="alignToTitle float-right text-secondary" ><i class="dripicons-document-edit"></i></a>
                                    </span>
                                  </h5>
                                </div> <!-- end media-body -->
                              </div> <!-- end media -->
                            </div> <!-- end card-body -->
                          </div> <!-- end col -->
                          <!-- item -->
                         
                          @endforeach
                        </div> <!-- end company-list-1-->
                      </div> <!-- end div.bg-light-->
                    </div> <!-- end col -->
                  </div> <!-- end row -->
                </div> <!-- end card-body -->
              </div> <!-- end card -->
            </div> <!-- end col -->
          </div>
  
          <!-- Init Dragula -->
          <script type="text/javascript">
            ! function(r)
            {
              "use strict";
              var a = function()
              {
                this.$body = r("body")
              };
              a.prototype.init = function()
              {
                r('[data-plugin="dragula"]').each(function()
                {
                  var a = r(this).data("containers"),
                    t = [];
                  if (a)
                    for (var n = 0; n < a.length; n++) t.push(r("#" + a[n])[0]);
                  else t = [r(this)[0]];
                  var i = r(this).data("handleclass");
                  i ? dragula(t,
                  {
                    moves: function(a, t, n)
                    {
                      return n.classList.contains(i)
                    }
                  }) : dragula(t)
                })
              }, r.Dragula = new a, r.Dragula.Constructor = a
            }(window.jQuery),
            function(a)
            {
              "use strict";
              window.jQuery.Dragula.init()
            }();
          </script>
  
          <script type="text/javascript">
            jQuery(document).ready(function()
            {
              $('.widgets-of-quiz-question').hide();
            });
  
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
  
            function deleteQuizQuestionAndReloadModal(quizID, questionID)
            {
              var deletionURL = 'https://demo.academy-lms.com/academy/' + 'admin/quiz_questions/' + quizID + '/delete/' + questionID;
              var reloadURL = 'https://demo.academy-lms.com/academy/' + 'modal/popup/quiz_questions/' + quizID;
              confirm_modal(deletionURL);
            }
  
            function sort()
            {
              var containerArray = ['question-list'];
              var itemArray = [];
              var itemJSON;
              for (var i = 0; i < containerArray.length; i++)
              {
                $('#' + containerArray[i]).each(function()
                {
                  $(this).find('.draggable-item').each(function()
                  {
                    //console.log(this.id);
                    itemArray.push(this.id);
                  });
                });
              }
  
              itemJSON = JSON.stringify(itemArray);
              $.ajax(
              {
                url: 'https://demo.academy-lms.com/academy/admin/ajax_sort_question/',
                type: 'POST',
                data:
                {
                  itemJSON: itemJSON
                },
                success: function(response)
                {
                  success_notify('Questions have been sorted');
                  setTimeout(
                    function()
                    {
                      location.reload();
                    }, 1000);
                }
              });
            }
            onDomChange(function()
            {
              $('#question-sort-btn').show();
            });
          </script>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


@endsection