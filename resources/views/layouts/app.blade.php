<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Dronos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/jquery.fancybox.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/animations.css') !!}
    {!! Html::style('css/app.css') !!}
    {!! Html::script('editor/ckeditor.js') !!}
    
</head>
<body>
<div class="ttable">
	<div class="tablerow">
		<div class="ttd table-sidebar">
			<ul>
				<li><a href="/" title="Escritorio"><i class="fa fa-tachometer"></i></a></li>
				<li><a href="/messages" title="Mensajes"><i class="fa fa-comments"></i></a></li>
				<li><a href="/clients" title="Clientes"><i class="fa fa-address-book-o"></i></a></li>
				<li><a href="/tasks" title="Tareas"><i class="fa fa-tasks"></i></a></li>
			  	<li><a href="/users/{{ $current_user->id }}" title="Perfil"><i class="fa fa-user"></i></a></li>
			  	<li><a href="/config" title="Configuración"><i class="fa fa-gear"></i></a></li>
				<li><a href="/auth/logout" title="Salir"><i class="fa fa-sign-out"></i></a></li>
			</ul>
		</div>
		<div class="ttd table-content">
			<div class="scroller">
				<div class="container-fluid">
					@include('flash::message')
		     		@include('partials.errors')
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</div>

	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/bootstrap3-typeahead.min.js') !!}
	{!! Html::script('js/css3-animate-it.js') !!}
	{!! Html::script('js/jquery.fancybox.pack.js') !!}
	{!! Html::script('js/main.js') !!}
</body>
</html>