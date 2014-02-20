@extends('system.layout.hello')

@section('content')
		<div class="row top topB">
		       <div class="container">
		          <div class="col-lg-12 col-md-6">
		             <img src="{{ asset('img/M.png') }}">
		         </div>
		     </div>
		 </div>
		<div class="row">
			<div class="col-lg-12">
				{{-- contenido --}}
				@yield('minimal')
			</div>
			<!-- /.col-lg-12 -->
		</div>
@stop