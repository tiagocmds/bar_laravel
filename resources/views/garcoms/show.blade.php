@extends('layouts.app')
@section('main')
	<ul>
		<li>Nome: {{$garcom->nome}}</li>
		<li>Setor: {{$garcom->setor}}</li>
	</ul>
	<br>
	<a href="{{route('garcoms.index')}}">Voltar a Listagem</a>
@endsection	
