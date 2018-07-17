@extends('layouts.app')
@section('main')
    <form action="{{ route('mesas.store') }}" method="post">
        {{ csrf_field() }}
        <label for="nome">Setor da Mesa: </label>
        <input type="text" name="setor">
        <br>
        <br>
        <button class="btn btn-success" type="submit">Cadastrar</button>
        <a class="btn btn-danger" href="{{ route('mesas.index') }}">Voltar a Listagem</a>
    </form>	
@endsection   