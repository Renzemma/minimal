@extends('minimal.layout.hello')

@section('minimal')

<div class="container minimal_container">

	@include('system.layout.menu')

	<div class="col-lg-9 topD">
		<div class="pull-right">
			<a href="{{ URL::route('posts.create') }}" type="button" class="btn btn-success">{{trans('messages.create')}}</a>
		</div>

		<table class="minimal_p table">
			<thead>
				<th>{{trans('messages.hash')}}</th>
				<th>{{trans('messages.title')}}</th>
				<th>{{trans('messages.creator')}}</th>
				<th>{{trans('messages.options')}}</th>
			</thead>
			<tbody>
				@foreach ($posts as $post => $key)

					<tr>
						<td>1</td>
						<td>{{ $key->title }}</td>
						<td>{{ User::find($key->user_id)->username }}</td>
						<td><a href=""><span class="glyphicon glyphicon-pencil"></span></a>
							<a href=""><span class="glyphicon glyphicon-remove" style="color:red;"></span></a></td>
					</tr>

				@endforeach
			

				</tbody>
			</table>

		</div>
	</div>

	@stop