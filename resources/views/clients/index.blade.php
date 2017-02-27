@extends('layouts.app')

@section('content')

<div class="inheader">
	<h4>Clientes</h4>
	<a href="#add_form" class="fancyb btn btn-default"><i class="fa fa-plus"></i> Agregar</a>
</div>

<div class="row">
	@foreach($clients as $client) 
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="panel panel-default">
				<a href="/clients/{{ $client->id }}/edit" class="btn btn-default pull-right"><i class="fa fa-edit"></i></a>
				<div class="panel-heading"><a href="/clients/{{ $client->id }}"><h4>{{ $client->name }}</h4></a></div>
			</div>
		</div>
	@endforeach
</div>

<!-- Agregar registro -->
<div class="add_form" id="add_form" style="display: none;">
	<form method="POST" action="/clients">
		<div class="form-group">
			<label for="name">Nombre</label>
			<input name="name" type="text" class="form-control input-lg" value="{{ old('name') }}">	
		</div>
		{{ csrf_field() }}
		<button type="submit" class="btn btn-primary">guardar</button>
	</form>
</div>

@endsection