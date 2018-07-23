@extends('layouts.app')
@section('main')
    <form action="{{ route('comandas.update', $comanda) }}" method="post">
    {{ method_field('patch') }}
    {{csrf_field()}}  
        @foreach($produtos as $id => $produto)
            <div>
                <label for="{{$produto}}">
                    <input type="checkbox" name="produtos[]" value="{{ $id }}">
                        {{$produto}}
                </label>
            </div>
        @endforeach
        <br>
        <input type="submit" value="Anotar">
    </form>                


@endsection