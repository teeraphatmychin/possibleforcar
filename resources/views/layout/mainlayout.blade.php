<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
   @include('layout.partials.head')
</head>
 <body>

@include('layout.partials.nav')

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
 </body>
</html>



