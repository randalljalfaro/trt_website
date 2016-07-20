<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="../assets/js/jquery/jquery.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
  @yield('scripts')
</footer>
</html>
