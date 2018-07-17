@extends('layouts.app')
@section('main')
    <form action="{{ route('produtos.store') }}" method="post">
        {{ csrf_field() }}
        <label for="nome">Nome do Produto: </label>
        <input type="text" name="nome">
        <br>
        <label for="valor">Valor: </label>
        <input type="text" name="valor">
        <br>
        <br>
        <button class="btn btn-success" type="submit">Cadastrar</button>
        <a class="btn btn-danger" href="{{ route('produtos.index') }}">Voltar a Listagem</a>
    </form>	
@endsection    

