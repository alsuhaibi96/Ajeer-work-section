<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
   <!--Load The  meta tags section-->
   @include('partials.meta-tags')
    <title> @yield('title')</title>
 
    <!--Load The  styles -->
    @include('partials.styles')

     <!--Load The scripts -->
   @yield('head-scripts')
    <!--Load The  extra  -->
    @yield('head-extra')
</head>
<body>

    <!--Load The  content  -->
  @yield('content')  
    
{{-- footer in the body --}}
@section('body-footer')
@include('partials.footer')
@show
       <!--Load The scripts -->

       @section('footer-scripts')
@include('partials.footer-scripts')
@show
    
</body>
</html>