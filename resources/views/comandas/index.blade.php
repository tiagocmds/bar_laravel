@extends('layouts.app')
@section('main')
   <pre>
        @foreach($listadecomandas as $mesa => $produtos)
         
        <a href="#">Comanda - {{$mesa}}</a>
       
        
        <br>
        @endforeach
    <br>
     
        <a href="{{ route('comandas.create') }}">Criar</a>

    </pre>

@endsection