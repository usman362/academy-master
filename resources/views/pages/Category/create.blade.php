@extends('layouts.app')
@section('content')
    
<div class="content-page" data-select2-id="12">
    <div class="content" data-select2-id="11">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <!-- start page title -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>Add new category</h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <div class="row justify-content-center" data-select2-id="10">
        <div class="col-xl-7" data-select2-id="9">
          <div class="card" data-select2-id="8">
            <div class="card-body" data-select2-id="7">
              <div class="col-lg-12" data-select2-id="6">
                <h4 class="mb-3 header-title">Category add form</h4>
  
                <form class="required-form" action="{{URL::to('Category')}}" method="post" enctype="multipart/form-data" data-select2-id="5">
                    @csrf
                  <div class="form-group">
                    <label for="code">Category code</label>
                    <input type="text" class="form-control" id="code" name="category_code" value="" >
                  </div>
  
                  <div class="form-group">
                    <label for="name">Category title<span class="required">*</span></label>
                    <input type="text" class="form-control" id="name" name="category_title" required="">
                  </div>
  
                  <div class="form-group" data-select2-id="4">
                    <label for="parent">Parent</label>
                    <select class="form-control select2 select2-accessible"  name="category_parent" id="parent" onchange="checkCategoryType(this.value)" data-select2-id="parent" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="2">None</option>
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}" data-select2-id="2">{{$category->category_title}}</option>
                      @endforeach
                    </select>
                  </div>
  
                  <div class="form-group iconpicker-container" id="icon-picker-area" style="">
                    <label for="font_awesome_class">Icon picker</label>
                    <input type="text" id="font_awesome_class" name="category_icon" class="form-control icon-picker iconpicker-element iconpicker-input" autocomplete="off">

                  </div>
  
                  <div class="form-group" id="thumbnail-picker-area" style="">
                    <label> Category thumbnail <small>(The image size should be: 400 X 255)</small> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*" onchange="changeTitleOfImageUploader(this)">
                        <label class="custom-file-label" for="category_thumbnail">Choose thumbnail</label>
                      </div>
                    </div>
                  </div>
  
                  <button type="button" class="btn btn-primary" onclick="checkRequiredFields()">Submit</button>
                </form>
              </div>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
  
      <script type="text/javascript">
        function checkCategoryType(category_type)
        {
          if (category_type > 0)
          {
            $('#thumbnail-picker-area').hide();
            $('#icon-picker-area').hide();
          }
          else
          {
            $('#thumbnail-picker-area').show();
            $('#icon-picker-area').show();
          }
        }
      </script>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

@endsection