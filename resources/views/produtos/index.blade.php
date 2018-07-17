@extends('layouts.app')
@section('main')
    <ol>
        @foreach($produtos as $produto)
			<li>
				<a href="{{ route('produtos.show', $produto) }}">
					{{ $produto->nome }}
				</a>	
			</li>	
		@endforeach
    </ol>
    <br>
    <a class="btn btn-primary" href="{{ route('produtos.create') }}">Cadastrar</a>
    <br>        

@endsection