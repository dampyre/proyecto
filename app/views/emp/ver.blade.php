<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/estilo.css" rel="stylesheet" media="screen">
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/') }}">Inicio</a>
	</div>
	<ul class="nav navbar-nav">
		{{--menu dinamico--}}
		
		<li><a href="{{ URL::to('dashboard') }} "class="active">Principal</a>
		<li class="pull-rigth"><a href="{{URL::to('/logout')}}" class="pull-rigth">salir</a></li>
		<br>
		
		

	</ul>
</nav>

<br>
<br>
<br>

<section class="">
	
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2 lateral">
				<div>
						<h4 class="text-center">Panel de Control</h4>
						<h4 class="text-center"> hola admin - <strong>{{ Auth::user()->nick }}</strong></h4>
						<p class="text-center"> pagina solo para admins</p>
						<div class="text-center">
							<script type="text/javascript">
							</script>

 	 						<a href="{{URL::to('/salir')}}" class="btn btn-danger">Salir</a>
 	 						<hr>
	 	 						<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/empresa')}}">Empresas</a></li>
									  
	  							</ul>
						</div>
					
				
			</div>
		</div>
			<div class="col-md-10 center fondo">

				<h3>{{$emp->nombre_empresa}}</h3>
				<p>Fecha Ingreso: </p>
				<hr>
				<div class="well">
					<p><strong>Datos de empresa</strong></p> <br>
					<div class="row">
						<p class="">DATOS BASE</p>
						<div class="col-md-9">
							<table class="table table-bordered table-striped ">
								<thead>
									<tr>
										<td>Empresa</td>
										<td>Rut</td>
										<td>Sucursal</td>
										<td>Comuna/Ciudad</td>
										<td>E-mail</td>
										<td>Fono</td>
										<td>Direccion</td>
										<td>Habilitado</td>
										
									</tr>
								</thead>
								<tbody>
										<tr>
											<td>{{$emp->nombre_empresa}}</td>
											<td>{{$emp->rut}}      </td>
											<td>{{$emp->sucursal}}   </td>
											<td>{{$emp->comuna_ciudad}}  </td>
											<td>{{$emp->email}}   </td>
											<td>{{$emp->fono}}</td>
											<td>{{$emp->direccion}}</td>
											<td>{{$emp->habilitado}}</td>

										</tr>
								</tbody>
							</table>

						</div>
						<br>
						
						<div class="col-md-9">
							<p class="">OTROS DATOS</p>
							<table class="active table table-bordered table-striped ">
								<thead>
									<tr>
										<td>N Asociado</td>
										<td>Area Alcance</td>
										<td>Fecha Ingreso</td>
										
																				
									</tr>
								</thead>
								<tbody>
										<tr>
											<td>{{$emp->n_asociado}}</td>
											<td>{{$emp->area_alcance}}</td>
											<td>{{$emp->fecha_ingreso}}</td>
											
										</tr>
								</tbody>
							</table>

						</div>
						<div class="col-md-4">
							<h5>Contactos</h5>
							<hr>
							Datos de contacto
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


</body>
</html>