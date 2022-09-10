<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Kundol&nbsp;&minus;&nbsp;Bootstrap Multipurpose Shopping Template</title>
      <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nibh vel tellus tincidunt molestie. Ut in libero ac elit pharetra auctor a eget nunc.">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="author" content="">
      
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <link rel="icon" type="image/png" href="{{ asset('images/miscellaneous/fav.png') }}">
  
      <!-- Fontawesome CSS Files -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
      <!-- Core CSS Files -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      
      <!-- Slider Revolution CSS Files -->
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
      
        
  </head>

  <body >

    @include('layouts.partials.navbar')
    <main class="form-signin">
      @yield('content')
    </main>
    @yield('shop')
    @yield('cart')
    @yield('productdetails')
    @yield('check')
    @yield('code')

    <!-- All custom scripts here -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- Slider Revolution core JavaScript files -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>


</body>
</html>