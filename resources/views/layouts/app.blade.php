<!DOCTYPE html>
<html>
  <head>
    <title>Opencasts</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <link href= "{!!  asset('css/bootstrap.min.css') !!}" rel="stylesheet">    
      <link href= "{!!  asset('css/custom.css') !!}" rel="stylesheet">    
   
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

  </head>
  <body>

@yield('nav')

@yield('body')

@yield('footer')

</body>