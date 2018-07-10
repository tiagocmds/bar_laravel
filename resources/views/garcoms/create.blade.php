@extends('layouts.app')
@section('main')
<form action="{{ route('garcoms.store') }}" method="post">
	{{ csrf_field() }}
	<label for="nome">Nome do Garçom</label>
	<input type="text" name="nome">
	<label for="setor">Setor</label>
	<input type="text" name="setor">
	<button type="submit">Cadastrar</button>
</form>	
@endsection