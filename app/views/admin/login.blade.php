<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de seguridad -- Ingreso Admin</title>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="css/estilo.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>

@if(Session::get('msg'))
	<div class="alert alert-warning">
	<p class="">{{ Session::get('msg')}}</p>
	</div>
@endif
<br>
<br>
<div class="row">
	<div class="col-md-4 col-md-offset-4 jumbotron">
		<h3 class="text-center"> INGRESO </h3>
{{Form::open(array('url'=>'/login', 'method' => 'POST'))}}
	{{ Form::label('nick', 'Login')}}
	 {{ Form::text('nick', null, array('placeholder' => 'Introduce tu usuario', 'class' => 'form-control input-sm')) }}
	 
       {{ Form::password('password', array('placeholder' => 'contraseña', 'class' => 'form-control input-sm'))}} 
       <br />
       {{Form::submit('Ingresar', array('class'=>'btn btn-primary'))}}
        
 {{Form::close()}}
 </div>
 </div>

</body>
</html>
