@extends('layouts.app')

@section('content')

<div class="inheader">
	<h4>Editar Cliente</h4>
</div>

<div class="row">
	<div class="col-sm-8">
		<form method="POST" action="/clients/{{ $client->id }}">
			<div class="form-group">
				<label for="name">Nombre</label>
				<input name="name" type="text" class="form-control input-lg" value="{{ old('name') ? old('name') : $client->name }}">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" class="form-control">{{ old('content') ? old('content') : $client->content }}</textarea>
				<script type="text/javascript">
					var editor = CKEDITOR.replace('content');
				</script>
			</div>
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
			<button type="submit" class="btn btn-primary">guardar</button>
		</form>
	</div>
	<div class="col-sm-4">
		@include('partials.fields.edit', ['fields' => $client->fields, 'resource' => 'client_id', 'resource_id' => $client->id])
		{!! Form::open([
		    'method' => 'DELETE',
		    'route' => ['clients.destroy', $client->id]
		]) !!}
		    {!! Form::submit('Delete this?', ['class' => 'btn btn-danger btn-xs']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection