@extends('layouts.app')
@section('main')
<form action="{{ route('cardapios.store') }}" method="post">
	{{ csrf_field() }}
	<label for="Nome">Nome do Produto</label>
	<input type="text" name="Nome">
	<label for="Valor">Valor do Produto</label>
	<input type="number" name="Valor">
	<button class="btn btn-success" type="submit">Cadastrar</button>
	<a class="btn btn-danger" href="{{ route('cardapios.index') }}">Voltar a Listagem</a>
</form>	
	


@endsection