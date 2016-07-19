@extends('trt/layout')

@include('trt/welcome')
@include('trt/about')

@section('header')
<section class="header">
</section>
@endsection

@section('content')
<section class="content">
	@yield('welcome')
	@yield('about')
</section>
@endsection

@section('footer')
<section class="footer">
</section>
@endsection
