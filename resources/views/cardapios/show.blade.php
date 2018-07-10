@extends('layouts.app')
@section('main')
	<ul>
		<li>Produto: {{$cardapio->Nome}}</li>
		<li>Valor: {{$cardapio->Valor}}</li>
	</ul>
	<br>
	<a href="{{ route('cardapios.index') }}">Voltar a Listagem</a>
@endsection		
