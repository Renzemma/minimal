@extends('minimal.layout.hello')

@section('minimal')

<div class="container minimal_container">

	@include('system.layout.menu')

	<div class="col-lg-9 topD">

		<h1 class="minimal_h"> {{ trans('messages.krakenCliche') }}</h1>


			{{ Form::open(array('url' => URL::route('posts.update', $post->id), 'role' => 'form',  'method' => 'put')) }}
			<div class="input-group input-group-lg">
				<span class="input-group-addon glyphicon glyphicon-flash"></span>
				<input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="{{trans('messages.title')}}">
			</div>
			<div class="topD topB">

				<h2 class="minimal_h"> {{ trans('messages.mainContent') }} <span class="glyphicon glyphicon-play" style="font-size:10px;"></span></h2>

			</div>
			<textarea class="ckeditor" name="content"  id="postEditor">{{ $post->content }}</textarea>

		{{ Form::submit(trans('messages.save'), array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
</div>

@stop