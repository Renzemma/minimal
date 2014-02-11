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


			{{ Form::open(array('url' => URL::route('posts.store'), 'role' => 'form')) }}
			<div class="input-group input-group-lg">
				<span class="input-group-addon glyphicon glyphicon-flash"></span>
				<input type="text" name="title" class="form-control" placeholder="Title">
			</div>
			<div class="topD topB">

				<h2 class="minimal_h"> Main Content <span class="glyphicon glyphicon-play" style="font-size:10px;"></span></h2>

			</div>
			<textarea class="ckeditor" name="content" id="postEditor"></textarea>

		{{ Form::submit(trans('messages.save'), array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
</div>

@stop