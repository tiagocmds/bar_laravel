@extends('layouts.app')
@section('main')
<form action="{{ route('clientes.store') }}" method="post">
	{{ csrf_field() }}
	<label for="Nome">Nome do Cliente</label>
	<input type="text" name="nome">
	<label for="Valor">Telefone</label>
	<input type="text" name="telefone">
	<button class="btn btn-success" type="submit">Cadastrar</button>
	<a class="btn btn-danger" href="{{ route('clientes.index') }}">Voltar a Listagem</a>
</form>	
	


@endsection