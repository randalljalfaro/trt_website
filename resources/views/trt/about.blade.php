 @extends('layouts/regularSection', 
 [
 'css' => 'node row about',
 'header' => 'about_header',
 'ref' => '',
 'content' => 'about_content',
 'footer' => 'about_footer'
 ])
 
 @section("css")
 @endsection

 @section('about_header')
 	<h1>We are not classic, we are TRT interactive</h1>
 @endsection
 @section('about_content')
 	<ul class="grid-list col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
 		<li class="first item top corner-left col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"> 	
 			<image src="../assets/images/logo-trt.png"/>
		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 top corner-right">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>		
 		<li class="item bottom corner-left col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 		<li class="item bottom corner-right col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 			<image src="../assets/images/logo-trt.png"/>
 		</li>
 	</ul>
 @endsection
 @section('about_footer')
 	
	<div class="col col-4"></div>
	<div class="col col-6">
		<p> We re-Design businesses and create digital experience to</p>
		<p> delight your customers through eCommerce innovation. </p>
	</div>
	<div class="col col-4"></div>

	<div class="col col-4"></div>
	<div class="col col-6">
		<p><strong> We have sold: 4,000,000 USD online and counting </strong></p>
	</div>
	<div class="col col-4"></div>
	 
 @endsection