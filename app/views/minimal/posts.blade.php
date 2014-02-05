@extends('minimal.layout.hello')

@section('minimal')
<div class="row top">
	<div class="container">
		<div class="col-lg-12 col-md-6">
			<img src="{{ asset('img/M.png') }}"> <h6 class="minimal_h6">Minimal power</h6>
		</div>
	</div>
</div>
<div class="container minimal_container">

	@include('system.layout.menu')

	<div class="col-lg-9">

	<h1 class="minimal_h"> Release the Kraken!...sorry...the ideas.</h1>

	</div>
</div>
@stop