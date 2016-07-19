 @extends('layouts/regularSection', 
 [
 'regular_section_css' => 'node row welcome',
 'header' => 'welcome_header',
 'content' => '',
 'footer' => 'welcome_footer'
 ])

 @section("css")
 @endsection

 @section('welcome_header')
 <image src="../assets/images/logo-trt.png"/>
 @endsection

 @section('welcome_footer')
 <h1>SOMOS ECOMMERCE</h1>
 @endsection


