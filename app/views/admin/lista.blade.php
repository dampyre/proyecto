@extends('inicio')
@section('nav')
	@parent
		
	
@stop 
@section('lateral')
	@parent
	<div class="text-center">
 		
 		
	</div>
	<hr />
	<ul class="nav nav-pills nav-stacked">
			
			<li>Administradores</li>
			<hr />
			<li><a href="{{URL::to('/crear')}}" > Crear Admin</a></li>
			 
  	</ul>
@stop

 @section('principal')
<section>
	<h2> listando los admins</h2>
	@if(Session::has('message'))
		<div class="alert alert-info">
			{{Session::get('message')}}
		</div>
	@endif

<table class="table  table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Nick</td>
			<td>Email</td>
			<td>tipo</td>
		</tr>
	</thead>
	<tbody>
		@foreach($admins as $key => $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->nick}}</td>
				<td>{{$value->email}}</td>
				<td>{{$value->tipo}}</td>
				<td>
					
					<a href="{{URL::to('ver/' . $value->id)}}" class="btn small btn-success"> Ver</a>
					<a href="{{URL::to('editar/' . $value->id )}}" class="btn small btn-info"> Editar</a>
					<!-- boton de borrado -->
					
				</td>
				<td>
					{{Form::open(array('url'=>'dashboard/'. $value->id, 'class'=>'pull-rigth'))}}
						{{Form::hidden('_method', 'DELETE')}}
						{{Form::submit('eliminar', array('class'=>'btn btn-warning pull-rigth'))}}
					{{Form::close()}}
				</td>
			</tr>
			@endforeach
	</tbody>
</table>
</section>
@stop