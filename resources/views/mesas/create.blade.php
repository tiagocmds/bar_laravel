@extends('layouts.app')
@section('main')
    <form action="{{ route('mesas.store') }}" method="post">
        {{ csrf_field() }}
        <label for="nome">Setor da Mesa: </label><br>
        <input type="radio" name="setor" value="norte">Norte<br>
        <input type="radio" name="setor" value="sul">Sul<br>
        <input type="radio" name="setor" value="leste">Leste<br>
        <input type="radio" name="setor" value="oeste">Oeste<br>
        <br>
        <br>
        <button class="btn btn-success" type="submit">Cadastrar</button>
        <a class="btn btn-danger" href="{{ route('mesas.index') }}">Voltar a Listagem</a>
    </form>	
@endsection   