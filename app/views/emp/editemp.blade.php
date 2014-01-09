<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
	<link href="../css/pikaday.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../js/moment.min.js"></script>
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
				<p>Editando:: {{$emp->nombre_empresa}}</p>
{{ HTML::ul($errors->all()) }}
{{Form::model($emp, array( $emp->id, 'method'=>'PUT'))}}
	<div class="row">
		<div class="form-group col-xs-4">
			{{Form::label('nombre_empresa', 'Nombre Empresa')}}
			{{ Form::text('nombre_empresa',null, array('placeholder' => 'Introduce el nombre de la empresa', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('rut', 'Rut')}}
			{{ Form::text('rut',null, array('placeholder' => 'Ingresa rut ', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('email', 'Email')}}
			{{ Form::text('email',null, array('placeholder' => 'Introduce el mail de la empresa', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('n_asociado', 'N° Asociado')}}
			{{ Form::text('n_asociado',null, array('placeholder' => 'Introduce N° Asociado', 'class' => 'form-control'))}}
		
		</div>
		
		<div class="form-group col-xs-4">
			{{Form::label('sucursal', 'Sucursal')}}
			{{ Form::text('sucursal',null, array('placeholder' => 'Introduce sucursal o casa matriz', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('comuna_ciudad', 'Ciudad')}}
			{{ Form::text('comuna_ciudad',null, array('placeholder' => 'Introduce Ciudad o comuna', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('area_alcance', 'Area Alcance')}}
			{{ Form::text('area_alcance',null, array('placeholder' => 'Introduce el area a cubrir por el analisis', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4" >
			<script>
				var field = document.getElementById('datepicker');
				var picker = new Pikaday({

    			onSelect: function(date) {
        		field.value = picker.toString('YYYY-MM-DD');
    					}
				});
				field.parentNode.insertBefore(picker.el, field.nextSibling);
			</script>
			{{Form::label('fecha_ingreso', 'Fecha ingreso')}}
			{{ Form::text('fecha_ingreso',null, array('placeholder' => 'Fecha', 'id'=>'datepicker', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('password', 'Contraseña')}}
			{{ Form::text('password',null, array('placeholder' => 'Ingresa contraseña', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('fono', 'Telefono')}}
			{{Form::text('fono',null, array('placeholder' => 'Ingresa ingresa telefono empresa', 'class' => 'form-control'))}}
		
		</div>
		<div class="form-group col-xs-4">
			{{Form::label('direccion', 'Direccion')}}
			{{Form::text('direccion',null, array('placeholder' => 'Ingresa ingresa telefono empresa', 'class' => 'form-control'))}}
		
		</div>

		<div class="form-group col-xs-4">
			{{Form::label('habilitado', 'Habilitado')}}
			{{Form::select('habilitado',array('si'=>'Si', 'no' => 'No'),null, array('placeholder' => 'Ingresa ingresa telefono empresa', 'class' => 'form-control'))}}
		
		</div>

		{{Form::submit('guardar', array('class'=>'btn btn-primary'))}}
	</div>
{{Form::close()}}


			</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="../js/bootstrap.js"></script>
	<script src="../js/moment-with-langs.js"></script>
	<script src="../js/pikaday.js"></script>
	<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker') });
	</script>
</body>
</html>