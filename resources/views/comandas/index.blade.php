@extends('layouts.app')
@section('main')
   <pre>
        @foreach($listadecomandas as $mesa => $comandas)
      
        <a href="{{ route('mesas.show', $mesa) }}">Mesa - {{$mesa}}</a>
            @foreach($comandas as $comanda)
            --<a href="{{ route('comandas.show', $comanda) }}">comanda - {{$comanda->id}} ({{$comanda->nome}})</a>
            @endforeach
        <br>
        @endforeach
    <br>
     
        <a href="{{ route('comandas.create') }}">Criar</a>

    </pre>

@endsection