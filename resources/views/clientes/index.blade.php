@extends('layouts.app')
@section('main')
<ol>
	@foreach($clientes as $cliente)
		<li>
			<a href="{{ route('clientes.show', $cliente) }}">
				{{ $cliente->nome }}
			</a>
		</li>		
	@endforeach
</ol>	
<a href="{{ route('clientes.create') }}">Cadastrar Novo</a>
<br>
	<br>
	<a href="{{ route('homes.index') }}">Voltar ao Menu Inicial</a>
@endsection