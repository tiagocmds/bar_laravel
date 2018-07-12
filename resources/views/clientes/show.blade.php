@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>Nome: {{$cliente->nome}}</h3></div>
  		<div class="panel-body"><h4>Telefone: {{$cliente->telefone}}<h4></div>
	</div>
	<br>
	<a class="btn btn-danger" href="{{ route('clientes.index') }}">Voltar a Listagem</a>
@endsection		
