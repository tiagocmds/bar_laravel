@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>Nome: {{$garcom->nome}}</h3></div>
  		<div class="panel-body"><h4>Garçom desde :  {{$garcom->created_at}}<h4></div> 
	</div>
	<br>
	
	<a class="btn btn-danger" href="{{route('garcoms.index')}}">Voltar a Listagem</a>
	<a class="btn btn-danger" href="{{ route('garcoms.edit' , $garcom) }}">Editar</a>
@endsection	
