@extends('layouts.app')
@section('main')
	<ul>
		<li>Nome: {{$cliente->nome}}</li>
		<li>Telefone: {{$cliente->telefone}}</li>
	</ul>
	<br>
	<a href="{{ route('clientes.index') }}">Voltar a Listagem</a>
@endsection		
