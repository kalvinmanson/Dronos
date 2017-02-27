@extends('layouts.app')

@section('content')

<div class="inheader">
	<h4>Tareas</h4>
</div>

	@foreach($tasks as $task) 
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="panel panel-default">
				<a href="/clients/{{ $task->id }}/edit" class="btn btn-default pull-right"><i class="fa fa-edit"></i></a>
				<div class="panel-heading"><a href="/clients/{{ $task->id }}"><h4>{{ $task->name }}</h4></a></div>
			</div>
		</div>
	@endforeach

@endsection