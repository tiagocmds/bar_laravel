@extends('layouts.app')
@section('main')
    
    <form action="{{ route('garcoms.update', $garcom) }}" method="post">
    {{method_field('patch')}}
    {{csrf_field()}}   
        <label for="nome">Nome do Garçom: </label>
        <input type="text" name="nome" value="{{$garcom->nome}}">
        <br>
        <label for"setor">Setor: </label>
        <input type="radio" name="setor" value="Norte">Norte
	    <input type="radio" name="setor" value="Sul">Sul
	<   <input type="radio" name="setor" value="Leste">Leste
	    <input type="radio" name="setor" value="Oeste">Oeste
        <br>
        <input type="submit" value="Editar">
    </form>    



@endsection