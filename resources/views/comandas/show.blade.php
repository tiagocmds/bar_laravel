@extends('layouts.app')
@section('main')
    
    @foreach($comandas as $comanda)
        @if($comanda->mesa_id == $mesa->id)
            {{asdasd}}
        @endif
    @endforeach        



@endsection