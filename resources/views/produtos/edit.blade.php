@extends('layouts.app')
@section('main')
    
    <form action="{{ route('produtos.update', $produto) }}" method="post">
    {{method_field('patch')}}
    {{csrf_field()}}   
        <label for="Nome">Nome do Produto: </label>
        <input type="text" name="nome" value="{{$produto->nome}}">
        <br>
        <label for"Valor">Valor do Produto: </label>
        <input type="text" name="valor" value="{{$produto->valor}}">
        <br>
        <input type="submit" value="Editar">
    </form>    



@endsection