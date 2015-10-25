<!DOCTYPE html>
<html>
  <head>
    <title>Opencasts</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <link href= "{!!  secure_asset('css/bootstrap.min.css') !!}" rel="stylesheet">    
      <link href= "{!!  secure_asset('css/custom.css') !!}" rel="stylesheet">    
   
        <script type="text/javascript" src="{!! secure_asset('js/jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! secure_asset('js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! secure_asset('js/custom.js') !!}"></script>

  </head>
  <body>

@yield('nav')

@yield('body')

@yield('footer')

</body>
</html>