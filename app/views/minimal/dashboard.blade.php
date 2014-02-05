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
	<div class="pull-right">
	<button type="button" class="btn btn-success">Create</button>
	</div>
	<table class="table topD">
		<thead>
			<th>#</th>
			<th>Title</th>
			<th>Creator</th>
			<th>Options</th>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>El don quijote</td>
				<td>Cristian</td>
				<td><a href=""><span class="glyphicon glyphicon-pencil"></span></a>
				<a href=""><span class="glyphicon glyphicon-remove" style="color:red;"></span></a></td>
			</tr>

		</tbody>
	</table>
	</div>
</div>

@stop