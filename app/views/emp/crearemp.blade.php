@extends('inicio')
@section('principal')
<p>Crear Admins</p>
{{ HTML::ul($errors->all()) }}
{{Form::open(array('url'=>'/crearemp', 'method'=>'POST'))}}
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
@stop
