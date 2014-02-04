@extends('system.layout.hello')

@section('content')
		<div class="row">
			<div class="col-lg-12">
				{{-- contenido --}}
				@yield('minimal')
			</div>
			<!-- /.col-lg-12 -->
		</div>
@stop