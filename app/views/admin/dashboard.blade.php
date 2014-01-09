@extends('inicio')
@section('nav')
	@parent
		
	
@stop 
@section('lateral')
	
	
	<hr />
	<ul class="nav nav-pills nav-stacked">
			<li><a href="{{URL::to('/empresa')}}">Empresas</a></li>
			<li><a href="{{URL::to('/lista')}}">Administradores</a></li>
			<li><a href="">Otros</a></li>  
  	</ul>
@stop

 @section('principal')

 <div class="row">
 	<div class="col-md-12">
 		
 	</div>
 </div>

@stop