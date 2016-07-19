@extends('layouts/layout')

@section('css')
@yield('css')
@endsection

@section('header')
<section class="node row header">
	<div class="col-lg-12">
	</div>
</section>
@endsection


@section('main_content')
<section class="row content">
	@include('trt/welcome')
	@include('trt/about')
</section>
@endsection


@section('footer')
<section class="node row footer">
	<div class="col-lg-12">
	</div>
</section>
@endsection
