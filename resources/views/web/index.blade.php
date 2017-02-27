@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-5">
		@include('partials.auth.user', ['user' => $current_user])
	</div>
</div>
@endsection