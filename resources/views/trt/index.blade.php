@extends('trt/layout')

@include('trt/welcome')
@include('trt/about')

@section('header')
<section class="node row header">
<div class="col-lg-12">
	</div>
</section>
@endsection

@section('content')
<section class="content">
	@yield('welcome')
	@yield('about')
</section>
@endsection

@section('footer')
<section class="node row footer">
	<div class="col-lg-12">
	</div>
</section>
@endsection
