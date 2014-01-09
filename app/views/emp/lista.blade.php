@extends('inicio')
@section('nav')
	@parent
		
	
@stop 
@section('lateral')
	
	
	<hr />
	<ul class="nav nav-pills nav-stacked">
			<li><a href="{{URL::to('/crearemp')}}">Crear empresa</a></li>
			
			<li><a href="">Otros</a></li>  
  	</ul>
@stop

 @section('principal')

 <div class="row">
 	<div class="col-md-12">
 		@foreach($emp as $key => $value)
 			<article class="col-md-3 ">
 					<h3 class="text-primary">Empresa:{{$value->nombre_empresa}}</h3>
 					<strong><script>  var fecha3 = moment('{{$value->fecha_ingreso}}').fromNow();
		 				document.write( 'Antiguedad: ' + fecha3);
		 			
		 			</script></strong>
 					<hr>
 					<address>
					  		<strong>{{$value->nombre_empresa}}</strong><br>
					  		<strong>Rut:</strong> {{$value->rut}}	 <br>
					  		fecha ingreso: {{$value->fecha_ingreso}}<br>
					  		
					</address>
					<a href="{{URL::to('veremp/' . $value->id)}}" class="btn small btn-success btn-sm"> Ver</a>
					<a href="{{URL::to('editaremp/' . $value->id )}}" class="btn small btn-info btn-sm"> Editar</a>
					{{Form::open(array('url'=>'empresa/'. $value->id, 'class'=>''))}}
						{{Form::hidden('_method', 'DELETE')}}
						{{Form::submit('eliminar', array('class'=>'btn small btn-warning  btn-sm'))}}
					{{Form::close()}}
 			</article>
 		@endforeach 
 	</div>
 </div>
 <hr>
	<script>
		var now = moment();
		document.write(now);
	</script>
@stop