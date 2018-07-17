@extends('layouts.app')
@section('main')
    <ul>
    @foreach($mesas as $mesa)
			<li>
				<a href="{{ route('mesas.show', $mesa) }}">
					{{ $mesa->id }}
				</a>	
			</li>	
		@endforeach
    </ul>
    <br>
    <a class="btn btn-primary" href="{{ route('mesas.create') }}">Cadastrar</a>
    <br>        

@endsection