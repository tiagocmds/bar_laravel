@extends('layouts.app')
@section('main')
<form action="{{ route('garcoms.store') }}" method="post">
	{{ csrf_field() }}
	<label for="nome">Nome do Garçom</label>
	<input type="text" name="nome">
	<br>
	<label for="setor">Setor: </label>
	<input type="radio" name="setor" value="Norte">Norte
	<input type="radio" name="setor" value="Sul">Sul
	<input type="radio" name="setor" value="Leste">Leste
	<input type="radio" name="setor" value="Oeste">Oeste
	<button type="submit">Cadastrar</button>
</form>	
@endsection