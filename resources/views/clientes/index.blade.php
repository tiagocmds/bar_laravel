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
	{{$clientes->links()}}
	<br>	
	<a class="btn btn-success" href="{{ route('clientes.create') }}">Cadastrar Novo</a>
	<br>
	<br>
	
@endsection