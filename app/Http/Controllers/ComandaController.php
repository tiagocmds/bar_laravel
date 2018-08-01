<?php

namespace App\Http\Controllers;

use App\Comanda;
use App\Garcom;
use App\Produto;
Use App\Mesa;
use Illuminate\Http\Request;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadecomandas = Comanda::all()->groupBy('mesa_id');
        return view('comandas.index', compact('listadecomandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $garcoms = Garcom::get();
        $mesas = Mesa::get();
        return view('comandas.create', compact('garcoms', 'mesas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mesa_id' => 'required',
            'garcom_id' => 'required',
            'nome' => 'required|min:3|alpha',
        ]);
        Comanda::create($request->all());
        return redirect('comandas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function show(Comanda $comanda)
    {
        //$total = array_sum($comanda->produtos()->get()->pluck('valor')->toArray());
        $total = $comanda->produtos()->get()->sum('valor');
        return view('comandas.show', compact('comanda', 'produtos', 'total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Comanda $comanda)
    {
        $produtos = Produto::get()->pluck('nome', 'id')->sortBy('nome');
        return view('comandas.edit', compact('comanda', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comanda $comanda)
    {
        $comanda->produtos()->attach($request->get('produtos'));
        //$comanda->produtos()->sync($request->produtos);
        return redirect('comandas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comanda $comanda)
    {
        //
    }
    public function somaValor($comanda){
        $total = 0;
        //dd($comanda->produtos()->get()->toArray()[5]);
        dd($comanda->produtos()->get()->pluck('valor')->toArray());
        foreach($comanda->produtos()->get() as $produto){

            $total += $produto->valor;    
        }
        return $total;
    }
}
