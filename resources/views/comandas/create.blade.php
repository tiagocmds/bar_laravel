@extends('layouts.app')
@section('main')
    <form action="{{ route('comandas.store') }}" method="post">
    {{ csrf_field() }}
    <label for="nome">Nome do Cliente: </label>
    <input type="text" name="nome">
    <h3>Mesas</h3>
    @foreach($mesas as $mesa)
        <input type="radio" name="mesa_id" value="{{$mesa->id}}">{{$mesa->id}}<br>
    @endforeach  
    <br>
    <h3>Garçons</h3>
    @foreach($garcoms as $garcom)
        <input type="radio" name="garcom_id" value="{{$garcom->id}}">{{$garcom->nome}}<br>
    @endforeach 
        

        <input type="submit" value="Cadastrar">
    </form   

@endsection