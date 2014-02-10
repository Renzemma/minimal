@extends('minimal.layout.hello')

@section('minimal')
<div class="row top topB">
	<div class="container">
		<div class="col-lg-12 col-md-6">
			<img src="{{ asset('img/M.png') }}"> <h6 class="minimal_h6">Minimal power</h6>
		</div>
	</div>
</div>
<div class="container minimal_container">

	@include('system.layout.menu')

	<div class="col-lg-9 topD">

	<h1 class="minimal_h"> Release the Kraken!...sorry...the ideas.</h1>

		<div class="text-justify topD" style="background:none;">
			<div class="input-group input-group-lg">
			  <span class="input-group-addon glyphicon glyphicon-flash"></span>
			  <input type="text" class="form-control" placeholder="Title">
			</div
			<div class="topD topB">

				<h2 class="minimal_h"> Main Content <span class="glyphicon glyphicon-play" style="font-size:10px;"></span></h2>
				
			</div>
			<textarea class="ckeditor" id="postEditor"></textarea>


			<div style="margin-top:20px;">
				<button type="button" class="btn btn-primary">Publish!</button>
			</div>
		</div>
	</div>
</div>

@stop