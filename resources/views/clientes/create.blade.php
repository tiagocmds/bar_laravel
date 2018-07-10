@extends('layouts.app')
@section('main')
<form action="{{ route('clientes.store') }}" method="post">
	{{ csrf_field() }}
	<label for="Nome">Nome do Cliente</label>
	<input type="text" name="nome">
	<label for="Valor">Telefone</label>
	<input type="text" name="telefone">
	<button type="submit">Cadastrar</button>
</form>	
	<br>
	<a href="{{ route('clientes.index') }}">Voltar a Listagem</a>


@endsection