@extends('layouts.app')
@section('content')
    

<div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
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
                        <h5 class="mt-0">Questions of: Bootstrap Pop Quiz <button type="button" class="btn btn-outline-primary btn-sm btn-rounded alignToTitle ml-1" id="question-sort-btn" onclick="sort()" name="button">Update sorting</button>
                          <button type="button" class="btn btn-outline-primary btn-sm btn-rounded alignToTitle" onclick="showAjaxModal('https://demo.academy-lms.com/academy/modal/popup/question_add/28', 'Add new question')" name="button" data-dismiss="modal">Add new question</button>
                        </h5>
                        <div id="question-list" class="py-2">
                          <!-- Item -->
                          <div class="card mb-0 mt-2 draggable-item on-hover-action" id="3">
                            <div class="card-body">
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mb-1 mt-0">The Bootstrap grid system is based on how many columns? <span id="widgets-of-3" class="widgets-of-quiz-question" style="display: none;">
                                      <a href="javascript::" class="alignToTitle float-right ml-1 text-secondary" onclick="deleteQuizQuestionAndReloadModal('28', '3')" data-dismiss="modal"><i class="dripicons-cross"></i></a>
                                      <a href="javascript::" class="alignToTitle float-right text-secondary" onclick="showAjaxModal('https://demo.academy-lms.com/academy/modal/popup/question_edit/3/28', 'Update quiz question')" data-dismiss="modal"><i class="dripicons-document-edit"></i></a>
                                    </span>
                                  </h5>
                                </div> <!-- end media-body -->
                              </div> <!-- end media -->
                            </div> <!-- end card-body -->
                          </div> <!-- end col -->
                          <!-- item -->
                          <!-- Item -->
                          <div class="card mb-0 mt-2 draggable-item on-hover-action" id="4">
                            <div class="card-body">
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mb-1 mt-0">Which class shapes an image to a circle? <span id="widgets-of-4" class="widgets-of-quiz-question" style="display: none;">
                                      <a href="javascript::" class="alignToTitle float-right ml-1 text-secondary" onclick="deleteQuizQuestionAndReloadModal('28', '4')" data-dismiss="modal"><i class="dripicons-cross"></i></a>
                                      <a href="javascript::" class="alignToTitle float-right text-secondary" onclick="showAjaxModal('https://demo.academy-lms.com/academy/modal/popup/question_edit/4/28', 'Update quiz question')" data-dismiss="modal"><i class="dripicons-document-edit"></i></a>
                                    </span>
                                  </h5>
                                </div> <!-- end media-body -->
                              </div> <!-- end media -->
                            </div> <!-- end card-body -->
                          </div> <!-- end col -->
                          <!-- item -->
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


<div class="modal fade show" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" style="display: block;" aria-modal="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scrollableModalTitle">Add new question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div id="modal-body" class="modal-body ml-2 mr-2">
          <form action="{{URL::to('storequestion')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
        
            <div class="form-group">
              <label for="title">Select Question Type</label>
              <select class="form-control" id="type_qa" onchange="select_qa()">
                <option value="MultipleChoice">Multiple Choice Question</option>
                <option value="True_False">True or False</option>
              </select>
            </div>

            <div class="form-group">
              <label for="title">Question title</label>
              <input class="form-control" type="text" name="title" id="title" required="">
            </div>
            {{-- <div class="form-group" id="multiple_choice_question">
              <label for="number_of_options">Number of options</label>
              <div class="input-group">
                <input type="number" class="form-control" name="number_of_options" id="number_of_options" data-validate="required" data-message-required="Value Required" min="0" max="4">
                <div class="input-group-append" style="padding: 0px"><button type="button" class="btn btn-secondary btn-sm pull-right" id="numbtn" name="button" onclick="addoptions()" style="border-radius: 0px;"><i class="fa fa-check"></i></button></div>
              </div>
            </div> --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         
            <div class="form-group options" id="option-f"><label>Option1</label>
              <div class="input-group" ><input type="text" id="opt1" name="options[]" class="form-control">
                <div class="input-group-append"><span class="input-group-text"><input type="radio" id="chk1" name="correctanswer[]" value="1"></span></div>
              </div><br><label>Option2</label>
              <div class="input-group" ><input type="text" id="opt2" name="options[]" class="form-control">
                <div class="input-group-append"><span class="input-group-text"><input type="radio" id="chk2" name="correctanswer[]" value="2"></span></div>
              </div><br><div id="option3"><label>Option3</label>
              <div class="input-group" ><input type="text" id="opt3" name="options[]" class="form-control">
                <div class="input-group-append"><span class="input-group-text"><input type="radio" id="chk3" name="correctanswer[]" value="3"></span></div>
              </div></div><br><div id="option4"><label>Option4</label>
              <div class="input-group" ><input type="text" id="opt4" name="options[]" class="form-control">
                <div class="input-group-append"><span class="input-group-text"><input type="radio" id="chk4" name="correctanswer[]" value="4"></span></div>
              </div></div><br>
            </div>


           {{-- <script>
               $('#type_qa').change(function(){
             if ($('#type_qa').val('True_False')) {
              $('#option3').remove();
              $('#option4').remove();
             }else {
              
             }
              
            });
           </script> --}}

            <script>   



              $('#opt1').on('input',function () {
                
                $('#chk1').val($('#opt1').val());
            });
         
            $('#opt2').on('input',function () {
                
                $('#chk2').val($('#opt2').val());
            });
        
            $('#opt3').on('input',function () {
                
                $('#chk3').val($('#opt3').val());
            });
         
            $('#opt4').on('input',function () {
                
                $('#chk4').val($('#opt4').val());
            });

          
          </script>
          <style>
            #option-t{
              display: none;
            }
          </style>
<script>

function select_qa(){
  var option3 = document.getElementById("option3");

  var option4 = document.getElementById("option4");
  var type_qa = document.getElementById("type_qa").value;

  if(type_qa == 'True_False'){
   option3.style.display = 'none';
   option4.style.display = 'none';
   document.getElementById('opt3').name = "name";
  document.getElementById('opt4').name = "name";
  document.getElementById('chk3').name = "name";
  document.getElementById('chk4').name = "name";
  }else{
    option3.style.display = 'block';
   option4.style.display = 'block';
   document.getElementById('opt3').name = "options[]";
  document.getElementById('opt4').name = "options[]";
  document.getElementById('chk3').name = "correctanswer[]";
  document.getElementById('chk4').name = "correctanswer[]";
  }
}

// $("#option-f input[type=radio]").change(function () {
                 //alert( 'check' );

                // $("#submit_ans").html($(this).val());

                // if($(this).val() == $('#correct').html()){
                //     $('#wrong').attr('src','https://default.academy-lms.com/assets/frontend/academy/img/green-tick.png');
                //     $('#correct-tag').html('You got 1 Out of 1 Correct .')
                    
                // }else{
                //     $('#wrong').attr('src','https://default.academy-lms.com/assets/frontend/academy/img/red-cross.png');
                //     $('#correct-tag').html('You got 0 Out of 1 Correct .')
                // }

//});


</script>



            <script type='text/javascript'>
                function addoptions(){
                    // Number of inputs to create
                    var number = document.getElementById("number_of_options").value;
                    // Container <div> where dynamic content will be placed
                    var container = document.getElementById("option-f");
                    // Clear previous contents of the container
                    while (container.hasChildNodes()) {
                        container.removeChild(container.lastChild);
                    }
                    if (number > 4) {
                      document.getElementById("number_of_options").value = '4';
                    } else {
                      for (i=1;i<=number;i++){
                        // Append a node with a random text
                       
                        // Create an <input> element, set its type and name attributes
                        var input = document.createElement("input");
                        var label = document.createElement("label");
                        var inputgroup = document.createElement("div");
                        var group = document.createElement("div");
                        var inputtext = document.createElement("span");
                        var checkbox = document.createElement("input");
                        inputgroup.className = "input-group-append";
                        group.className = "input-group";
                        inputtext.className = "input-group-text";
                        label.innerHTML = "Option" + i;
                        input.type = "text";
                        input.name = "options[]";
                        input.className = "form-control";
                        checkbox.type = "radio";
                        checkbox.name = "correctanswer[]";
                        checkbox.value = i;
                        container.appendChild(label);
                        container.appendChild(group);
                        
                        group.appendChild(input);
                        group.appendChild(inputgroup);
                        inputgroup.appendChild(inputtext);
                        inputtext.appendChild(checkbox);

                        // Append a line break 
                        container.appendChild(document.createElement("br"));
                    }
                    }
                    
                }
            </script>

            <div class="text-center">
              <button class="btn btn-success" type="submit" name="button" >Submit</button>
            </div>
          </form>
          <script type="text/javascript">
            function showOptions(number_of_options)
            {
              $.ajax(
              {
                type: "POST",
                url: "https://demo.academy-lms.com/academy/admin/manage_multiple_choices_options",
                data:
                {
                  number_of_options: number_of_options
                },
                success: function(response)
                {
                  jQuery('.options').remove();
                  jQuery('#multiple_choice_question').after(response);
                }
              });
            }
  
            $('#submitButton').click(function(event)
            {
              $.ajax(
              {
                url: 'https://demo.academy-lms.com/academy/admin/quiz_questions/28/add',
                type: 'post',
                data: $('form#mcq_form').serialize(),
                success: function(response)
                {
                  if (response == 1)
                  {
                    success_notify('Question has been added');
                  }
                  else
                  {
                    error_notify('No options can be blank and there has to be atleast one answer');
                  }
                }
              });
              showLargeModal('https://demo.academy-lms.com/academy/modal/popup/quiz_questions/28', 'Manage quiz questions');
            });
          </script>
        </div>
        <div class="modal-footer">
         
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
@endsection