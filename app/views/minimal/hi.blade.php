@extends('system.layout.hello')

@section('content')
<div class="container">
	<div class="col-lg-2">
		<div class="container">
			<div class="col-lg-12 col-md-6">
				<h1>MINIMAL Blog</h1>
				
			</div>
		</div>
	</div>
	<div class="col-lg-9" style="margin-top:10px;">
		<div class="col-lg-12 text-justify">
			{{-- contenido --}}
			<div class="container" style="max-width:600px;">

				<div style="margin-bottom:50px;">
					@foreach ($posts as $post => $key)
					<div style="margin-bottom: 100px;">
						<div>

							<h3>{{ $key->title }}</h3>
							<div style="height:370px;overflow: hidden;">
								{{ $key->content }}
							</div>
							<div style="margin-top:20px;">
							<a class="btn btn-default pull-right" href="{{ URL::route('posts.show', $key->id ) }}">{{ trans('messages.completePost') }}</a>
							</div>
						</div>			
					</div>
					@endforeach
				</div>


				<div class="pull-right">
					{{ $posts->links() }}
				</div>
			</div>
		</div>

		<!-- /.col-lg-12 -->
	</div>
</div>
@stop
