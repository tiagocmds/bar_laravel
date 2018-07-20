@extends('layouts.app')
@section('main')
<form action="{{ route('garcoms.store') }}" method="post">
	{{ csrf_field() }}
	<label for="nome">Nome do Garçom</label>
	<input type="text" name="nome">
	<br>
	<br>
	<br>
	<button class="btn btn-success" type="submit">Cadastrar</button>
	<a class="btn btn-danger" href="{{ route('garcoms.index') }}">Voltar a Listagem</a>
</form>	

@endsection