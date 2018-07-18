@extends('layouts.app')
@section('main')
   
    @foreach($comandas as $comanda)
          
        <a href="{{route('comandas.show', $comanda)}}">Mesa - {{$comanda->mesa_id}}</a>
        {{print_r($comanda)}}
    @endforeach
    <br>
     
        <a href="{{ route('comandas.create') }}">Criar</a>



@endsection