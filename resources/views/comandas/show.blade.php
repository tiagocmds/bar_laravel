@extends('layouts.app')
@section('main')
<pre>

    <table border="1" style="width:30%">
            <tr>
                <th>PRODUTO</th>
                <th>VALOR</th>
            </tr>
        @foreach($comanda->produtos()->get() as $produto)
        <tr>    
            <th>{{$produto->nome}}</th>
            <th>{{$produto->valor}}</th>
        </tr> 
        @endforeach 
        <tr>
            <th>TOTAL:</th>
            <th>{{$total}}</th>
        </tr>    
    </table>     
    <a href="{{ route('comandas.edit', $comanda) }}">Acrescentar Produto</a>
</pre>
@endsection