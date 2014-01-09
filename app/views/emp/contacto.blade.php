@extends('inicio')
@section('nav')
	@parent
@stop
@section('principal')
	<p>agregando contacto a {{$emp->nombre_empresa}}</p>
	{{Form::open(array('url'=>'/contacto'))}}
@stop