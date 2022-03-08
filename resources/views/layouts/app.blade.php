<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('partials.header')
<body data-layout="detached">
  @if (Auth::User()->role == '2')
  @include('partials.navbar2')
  @elseif (Auth::User()->role == '3')
  @include('partials.navbar2')
  @else
  @include('partials.navbar')
  @endif
  <!-- end Topbar -->    <div class="container-fluid">
    <div class="wrapper">
      @if (Auth::User()->role == '2')
      @include('partials.sidebar2')
      @elseif(Auth::User()->role == '3')
      @include('partials.sidebar3')
      @else
      @include('partials.sidebar')
      @endif
        

        @yield('content')
    </div>
    </div>
    @include('partials.library')
</body>

</html>