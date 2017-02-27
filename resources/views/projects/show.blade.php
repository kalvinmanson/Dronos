@extends('layouts.app')

@section('content')

<div class="inheader">
	<h4>{{ $project->client->name }}: {{ $project->name }}</h4>
</div>
<div class="row">
	<div class="col-sm-6">
		<span class="limit_date">{{ \Carbon\Carbon::parse($project->limit_date)->toDayDateTimeString() }}</span>

		<!-- Status bar-->
		<div class="progress">
		  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $project->status }}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: {{ $project->status }}%;">
		    {{ $project->status }}%
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
		<input type="hidden" name="project_id" value="{{ $project->id }}">
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection