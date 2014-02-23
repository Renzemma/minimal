@extends('system.layout.hello')

@section('content')
<div class="container">
	<div class="col-lg-2">
		<div class="container">
			<div class="col-lg-12 col-md-6">
				<h1>MINIMAL Blog</h1>
				<a href="/"> <span class="glyphicon glyphicon-list"></span> HOME </a>
			</div>
		</div>
	</div>
	<div class="col-lg-9" style="margin-top:10px;">
		<div class="col-lg-12 text-justify">
			{{-- contenido --}}
			<div class="container" style="max-width:600px;">

				<div style="margin-bottom:50px;">
					<div style="margin-bottom: 100px;">
						<div>
							<h3>{{ $post->title }}</h3>
							<div>
								{{ $post->content }}
							</div>
						</div>			
					</div>
				</div>

			</div>
		</div>

		<!-- /.col-lg-12 -->
	</div>
</div>
@stop
