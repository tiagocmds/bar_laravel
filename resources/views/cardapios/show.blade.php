@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>Produto: {{$cardapio->Nome}}</h3></div>
  		<div class="panel-body"><h4>Valor: {{$cardapio->Valor}}<h4></div>
	</div>
	<br>
	<a class="btn btn-danger" href="{{ route('cardapios.index') }}">Voltar a Listagem</a>
	<a class="btn btn-danger" href="{{ route('cardapios.edit' , $cardapio) }}">Editar</a>
@endsection		
