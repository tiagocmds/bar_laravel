@extends('layouts.app')
@section('main')
<div class="panel panel-primary">
		<div class="panel-heading"><h3>Nome: {{$produto->nome}}</h3></div>
  		<div class="panel-body"><h4>Setor: {{$produto->valor}}<h4></div>
	</div>
	<br>
	<a class="btn btn-danger" href="{{route('produtos.index')}}">Voltar a Listagem</a>
	<a class="btn btn-danger" href="{{ route('produtos.edit' , $produto) }}" value="Editar">Editar</a>


@endsection