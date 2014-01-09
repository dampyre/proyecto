<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de seguridad</title>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/estilo.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body class="container">
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/') }}">Inicio</a>
	</div>
	<ul class="nav navbar-nav">
		
		<li><a href="{{ URL::to('login') }}">Ingreso Admins</a>
	</ul>
</nav>
	<header class="jumbotron center">
		<div class="row">
			<div class="col-md-4"><img src="img/riesgos1.jpg" alt=""></div>
			<div class="col-md-8"><h1>PROYECTO <STRONG> IDP</STRONG></h1> <br>
					<p>nueva plataforma para la ayuda, gestion y documentacion de riesgos</p>
			 </div>
		</div>
	</header>
	<sectionm class="row">
		<div class="col-md-4 panel panel-info ">
			<h2>Gestion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sit, similique modi fuga quibusdam est sed nisi suscipit dolor magnam facilis amet quae incidunt iusto quia saepe enim odit cupiditate.</p>
		</div>
		<div class="col-md-4 panel panel-info"><h2>Documentacion</h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, sit, similique modi fuga quibusdam est sed nisi suscipit dolor magnam facilis amet quae incidunt iusto quia saepe enim odit cupiditate. </p>
		</div>
		<div class="col-md-4 panel panel-info"><h2>Soporte</h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, tenetur, illum nobis adipisci ipsam at distinctio error nulla illo porro ut unde expedita iusto? Possimus, sequi quo explicabo iusto est. </p>
		</div>
	</section>
</body>
</html>