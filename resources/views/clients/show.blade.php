@extends('layouts.app')

@section('content')

<div class="inheader">
	<h4>{{ $client->name }}</h4>
</div>

<div class="row">
	<div class="col-sm-5">
		<h1>{{ $client->name }}</h1>
		{!! $client->content !!}
		<div class="list-group">
			@foreach ($client->fields as $field)
			  <div class="list-group-item">
			  	<strong>{{ $field->name }}: </strong> {{ $field->content }}
			  </div>
			@endforeach
		</div>
	</div>
	<div class="col-sm-7">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="#new_project" class="fancyb btn btn-default pull-right"><i class="fa fa-plus"></i> Agregar</a>
				<h4>Proyectos</h4>
			</div>
			<div class="panel-body">
			@foreach ($client->projects as $project)
				  <div class="project-list">
				  	<!-- limit date -->
				  	<span class="limit_date">{{ \Carbon\Carbon::parse($project->limit_date)->toDayDateTimeString() }}</span>

				  	<a href="/projects/{{ $project->id }}"><h4>{{ $project->name }}</h4></a>
					<!-- Status bar-->
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $project->status }}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: {{ $project->status }}%;">
					    {{ $project->status }}%
					  </div>
					</div>
					<!-- fin Status bar-->
				  </div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<!-- Agregar registro -->
<div class="new_project" id="new_project" style="display: none;">
	<form method="POST" action="/projects">
		<div class="form-group">
			<label for="name">Nombre</label>
			<input name="name" type="text" class="form-control input-lg" value="{{ old('name') }}">	
		</div>
		{{ csrf_field() }}
		<input type="hidden" name="client_id" value="{{ $client->id }}">
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection