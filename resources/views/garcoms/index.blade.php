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
	{{$garcoms->links()}}
	<br>
	<a class="btn btn-success" href="{{ route('garcoms.create') }}">Cadastrar Novo</a>
	<br>
	<br>

@endsection