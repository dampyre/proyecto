@extends('inicio')
@section('principal')
<p>Crear Admins</p>
{{ HTML::ul($errors->all()) }}
{{Form::open(array('url'=>'crear', 'method'=>'POST'))}}
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
		<div class="form-group col-xs-4">
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
@stop
