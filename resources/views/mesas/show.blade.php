@extends('layouts.app')
@section('main')
<div class="panel panel-primary">
		<div class="panel-heading"><h3>Mesa Numero: {{$mesa->id}}</h3></div>
  		<div class="panel-body"><h4>Setor: {{$mesa->setor}}<h4></div>
	</div>
	<br>
	<a class="btn btn-danger" href="{{route('mesas.index')}}">Voltar a Listagem</a>



@endsection