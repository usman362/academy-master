@extends('layouts.app')
@section('content')
    
<div class="content-page">
    <div class="content">
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row ">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Categories <a href="/Category/create" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Add new category</a>
              </h4>
            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <div class="row">
      

        @foreach ($categories as $category)
            
        <div class="col-md-6 col-lg-6 col-xl-4 on-hover-action" id="{{$category->id}}">
            <div class="card d-block">
              <img class="card-img-top" src="/public/images/Category/{{$category->category_thumbnail}}" alt="Card image cap">
              <style>
                .card-img-top{
                  height: 200px;
                }
              </style>
              <div class="card-body">
                <h4 class="card-title mb-0"><i class="fas fa-desktop"></i> {{$category->category_title}}</h4>
                <small style="font-style: italic;">
                  <p class="card-text">{{$income = DB::table("categories")->where('category_parent',$category->id)->get()->count("id")}}  Sub categories</p>
                </small>
              </div>
    
              <ul class="list-group list-group-flush">
                  @foreach (App\Category::where('category_parent',$category->id)->get() as $subcat)
                <li class="list-group-item on-hover-action" id="{{$subcat->id}}">
                  <span><i class=""></i>{{$subcat->category_title}}</span>
                  <span class="category-action" id="category-delete-btn-{{$subcat->id}}" style="float: right; margin-left: 5px; display: none; height: 20px;">
                    <a href="#" class="action-icon" onclick="document.getElementById('form1{{$subcat->id}}').submit();"> <i class="fas fa-trash" style="font-size: 18px;"></i></a>

                    <form id="form1{{$subcat->id}}" action="{{route('Category.destroy', $subcat->id)}}" method="post"> @method('DELETE')
                        @csrf
                    </form>
                  </span>
                  <span class="category-action" id="category-edit-btn-{{$subcat->id}}" style="float: right; display: none; height: 20px;">
                    <a href="/Category/{{$subcat->id}}/edit" class="action-icon"> <i class="mdi mdi-pencil" style="font-size: 18px;"></i></a>
                  </span>
                </li>
                @endforeach
              </ul>
              <div class="card-body">
                <a href="/Category/{{$category->id}}/edit" class="btn btn-icon btn-outline-info btn-sm" id="category-edit-btn-{{$category->id}}" style="">
                  <i class="mdi mdi-wrench"></i> Edit </a>
                <a href="#" class="btn btn-icon btn-outline-danger btn-sm" id="category-delete-btn-{{$category->id}}" style="float: right;" onclick="document.getElementById('form1{{$category->id}}').submit();">
                  <i class="fas fa-trash"></i> Delete </a>
                  <form id="form1{{$category->id}}" action="{{route('Category.destroy', $category->id)}}" method="post"> @method('DELETE')
                    @csrf
                </form>
              </div> <!-- end card-body-->
            </div> <!-- end card-->
          </div>

          @endforeach
      </div>
  
      <script type="text/javascript">
        $('.on-hover-action').mouseenter(function()
        {
          var id = this.id;
          $('#category-delete-btn-' + id).show();
          $('#category-edit-btn-' + id).show();
        });
        $('.on-hover-action').mouseleave(function()
        {
          var id = this.id;
          $('#category-delete-btn-' + id).hide();
          $('#category-edit-btn-' + id).hide();
        });
      </script>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

@endsection