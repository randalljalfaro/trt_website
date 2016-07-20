@extends('layouts/layout')

@section('css')
@yield('css')
@endsection

@section('scripts')
<script type="text/javascript" src="../assets/js/main.js"></script>
@endsection

@section('header')
<section class="node row header">
	@include('trt/welcome')
</section>
@endsection


@section('main_content')
<section class="row content">
	@include('trt/about')
</section>
@endsection


@section('footer')
<section class="node row footer">
</section>
@endsection
