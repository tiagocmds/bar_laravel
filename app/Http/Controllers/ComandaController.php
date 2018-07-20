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
        //$comandas = ;





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
            'nome' => 'required',
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
        return view('comandas.show', compact('comandas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Comanda $comanda)
    {
        //
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
        //
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
}
