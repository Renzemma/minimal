@extends('system.layout.hello')

@section('content')
<div class="row">
	<div class="container">
		<div class="col-lg-12 col-md-6">
			<h1>AYCRAL Blog</h1>
			<div>
				<a href=""> <i class="fa fa-github fa-2x"></i></a>
				<a href=""> <i class="fa fa-twitter fa-2x"></i></a>
				<a href=""> <i class="fa fa-facebook fa-2x"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="row text-justify">
	<div class="col-lg-12">
		{{-- contenido --}}
		<div class="container" style="max-width:600px;">

			<div style="margin-bottom:50px;">
				@foreach ($posts as $post => $key)
				<div style="margin-bottom: 100px;">
					<div>
						<h3>{{ $key->title }}</h3>
						<p>{{ $key->content }}</p>
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
@stop
