@extends('layouts.app')
@section('main')
    
    <form action="{{ route('cardapios.update', $cardapio) }}" method="post">
    {{method_field('patch')}}
    {{csrf_field()}}   
        <label for="Nome">Nome do Produto: </label>
        <input type="text" name="Nome" value="{{$cardapio->Nome}}">
        <br>
        <label for"Valor">Valor do Produto: </label>
        <input type="text" name="Valor" value="{{$cardapio->Valor}}">
        <br>
        <input type="submit" value="Editar">
    </form>    



@endsection