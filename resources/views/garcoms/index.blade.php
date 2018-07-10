@extends('layouts.app')
@section('main')
	<ol>
		@foreach($garcoms as $garcom)
			<li>
				<a href="{{ route('garcoms.show', $garcom) }}">
					{{ $garcom->nome }}
				</a>
			</li>		
		@endforeach
	</ol>
	<a href="{{ route('garcoms.create') }}">Cadastrar Novo</a>
	<br>
	<br>
	<a href="{{ route('homes.index') }}">Voltar ao Menu Inicial</a>
@endsection