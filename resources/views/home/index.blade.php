@extends('layouts.app')
@section('main')
	<h1>SEJAM BEM VINDOS</h1>
	<br>
	<h3>Bar do Toba</h3>
	<br>
	<ol>
		<li><a href="{{ route('cardapios.index') }}">Cardapio</a></li>
		<li><a href="{{ route('clientes.index') }}">Lista de clientes</a></li>
		<li><a href="{{ route('garcoms.index') }}">Nossos Garçons</a></li>
	</ol>
@endsection