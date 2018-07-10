@extends('layouts.app')
@section('main')
	<ol>
		@foreach($cardapios as $cardapio)
			<li>
				<a href="{{ route('cardapios.show', $cardapio) }}">
					{{ $cardapio->Nome }}
				</a>	
			</li>	
		@endforeach
	</ol>
	<a href="{{ route('cardapios.create') }}">Cadastrar Novo</a>
	<br>
	<br>
	<a href="{{ route('homes.index') }}">Voltar ao Menu Inicial</a>
@endsection	