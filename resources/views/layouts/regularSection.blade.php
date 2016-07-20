@section("css")
@yield('css')
@endsection

<section class="{{$css}}" href="{{$ref}}">
	<header class="row">
		@yield($header)
	</header>
	<div class="row">
		@yield($content)
	</div>
	<footer class="row">
		@yield($footer)
	</footer>
</section>
