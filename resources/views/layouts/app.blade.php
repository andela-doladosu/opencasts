<!DOCTYPE html>
<html>
  <head>
    <title>Laravel</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      {!! Html::style( asset('css/bootstrap.min.css') ) !!}    
        {!! Html::style( asset('css/custom.css') ) !!}    
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

  </head>
  <body>

@yield('nav')

@yield('body')

@yield('footer')

</body>