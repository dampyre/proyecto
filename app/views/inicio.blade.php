<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de seguridad @yield('titulo')</title>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/estilo.css" rel="stylesheet" media="screen">
     <link href="css/pikaday.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/moment.min.js"></script>
</head>
<body class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/') }}">Inicio</a>
	</div>
	<ul class="nav navbar-nav">
		{{--menu dinamico--}}
		@section('nav')
		<li><a href="{{ URL::to('dashboard') }} "class="active">Principal</a>
		<li class="pull-rigth"><a href="{{URL::to('/logout')}}" class="pull-rigth">salir</a></li>
		<br>
		
		@show

	</ul>
</nav>

	<header class="container">
		
	</header>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-md-12">
			<aside class="col-md-2 lateral ">
						{{-- barra lateral --}}
					<div>
						<h4 class="text-center">Panel de Control</h4>
						<h4 class="text-center"> hola admin - <strong>{{ Auth::user()->nick }}</strong></h4>
						<p class="text-center"> pagina solo para admins</p>
						<div class="text-center">
							<script type="text/javascript">
							</script>

 	 						<a href="{{URL::to('/salir')}}" class="btn btn-danger">Salir</a>
						</div>
						
					</div>	
				
				<br>
		
			@section('lateral')
			{{-- completa menu segun contenido--}}
			@show
		</aside>
		
		<section class="col-md-10 center fondo ">
			{{--seccion principal--}}
			@yield('principal')
			 <script>
         </script>
		</section>	
		</div>
	</div>
	
	<script src="js/bootstrap.js"></script>
	<script src="js/moment-with-langs.js"></script>
	<script src="js/pikaday.js"></script>
	<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker') });
	</script>
</body>
</html>