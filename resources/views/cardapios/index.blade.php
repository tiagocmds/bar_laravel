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
	{{ $cardapios->links()}}
	<br>
	<a class="btn btn-success" href="{{ route('cardapios.create') }}">Cadastrar Novo</a>
	<br>
	<br>
	
@endsection	