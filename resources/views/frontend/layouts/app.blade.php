<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.header')
    <body class="gray-bg">
        @if (Auth::check())
            
        
        @if (Auth::User()->role == '3')
        @include('frontend.partials.student_navbar')
        @elseif(Auth::User()->role == '2')
        @include('frontend.partials.student_navbar')
        @else
        @include('frontend.partials.admin_navbar')
        @endif
        @else
        @include('frontend.partials.navbar')
        @endif
      
@yield('content')
        @include('frontend.partials.footer')
        @include('frontend.partials.library')

      
    </body>
</html>