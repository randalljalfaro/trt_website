<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>TRT</title>

  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  @yield('css')
</head>
<header class="container-fluid">
  @yield('header')
</header>
<body>
  <div class="container-fluid">
    @yield('main_content')
    <!--@yield('sidebar')-->
  </div>
</body>
<footer  class="container-fluid">
  @yield('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  @yield('scripts')
</footer>
</html>
