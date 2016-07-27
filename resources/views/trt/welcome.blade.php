 @extends('layouts/regularSection', 
 [
 'css' => 'node row welcome',
 'ref' => '',
 'header' => 'welcome_header',
 'content' => '',
 'footer' => 'welcome_footer'
 ])

 @section("css")
 @endsection

 @section('welcome_header')
 <image src="../assets/images/logo-trt.png"/>
 <image src="../assets/images/nube.png"/>
 @endsection

 @section('welcome_footer')
 <h1>SOMOS ECOMMERCE</h1>
 <image src="../assets/images/logo-expedia.png"/>
 <image src="../assets/images/logo-credomatic.png"/>
 <h2>PARTNERS</h2>
 @endsection


