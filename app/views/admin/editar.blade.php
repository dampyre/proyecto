<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/dashboard') }}">inicio</a>
	</div>
	<ul class="nav navbar-nav">
		
		<li><a href="{{ URL::to('create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Editando  {{ $admin->nick }}</h1>

	<div class="jumbotron text-center">
		{{ HTML::ul($errors->all()) }}
{{Form::model($admin, array( $admin->id, 'method'=>'PUT'))}}
	<div class="row">
		<div class="form-group col-xs-4">
			{{Form::label('nombre', 'Nombre')}}
			{{ Form::text('nombre',null, array('placeholder' => 'Introduce el nombre del adm', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('apellido', 'Apellido')}}
			{{ Form::text('apellido',null, array('placeholder' => 'Introduce el apellido del adm', 'class' => 'form-control'))}}
		
		</div>
		
		<div class="form-group col-xs-4">
			{{Form::label('nick', 'Nick')}}
			{{ Form::text('nick',null, array('placeholder' => 'Introduce el nick del adm', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('email', 'E-mail')}}
			{{ Form::text('email',null, array('placeholder' => 'Introduce el email del adm', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group span4">
			{{Form::label('password', 'Password')}}
			{{ Form::text('password',null, array('placeholder' => 'Introduce el password del adm', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('tipo', 'Tipo')}}
			{{ Form::text('tipo',null, array('placeholder' => 'Siempre debe ser admin', 'class' => 'form-control'))}}
		
		</div>
		{{Form::submit('guardar', array('class'=>'btn btn-primary'))}}
	</div>
{{Form::close()}}
</div>
</body>
</html>