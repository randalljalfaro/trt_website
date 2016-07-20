 @extends('layouts/regularSection', 
 [
 'css' => 'node row about',
 'header' => 'about_header',
 'content' => '',
 'footer' => 'about_footer'
 ])
 
 @section("css")
 @endsection

 @section('about_header')
 	<h1>We are not classic, we are TRT interactive</h1>
 @endsection

 @section('about_footer')
 	<image src="../assets/images/logo-trt.png"/>
 @endsection
