@extends('layouts.app')
@section('main')
<form action="{{ route('cardapios.store') }}" method="post">
	{{ csrf_field() }}
	<label for="Nome">Nome do Produto</label>
	<input type="text" name="Nome">
	<label for="Valor">Valor do Produto</label>
	<input type="number" name="Valor">
	<button type="submit">Cadastrar</button>
</form>	
	<br>
	<a href="{{ route('cardapios.index') }}">Voltar a Listagem</a>


@endsection