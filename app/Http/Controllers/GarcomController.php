<?php

namespace App\Http\Controllers;

use App\Garcom;
use Illuminate\Http\Request;

class GarcomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garcoms = Garcom::all();
        return view('garcoms.index', ['garcoms'=> $garcoms ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garcoms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Garcom::create($request->all());
        return redirect('garcoms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garcom  $garcom
     * @return \Illuminate\Http\Response
     */
    public function show(Garcom $garcom)
    {
        return view('garcoms.show', ['garcom' => $garcom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garcom  $garcom
     * @return \Illuminate\Http\Response
     */
    public function edit(Garcom $garcom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garcom  $garcom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garcom $garcom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garcom  $garcom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garcom $garcom)
    {
        //
    }
}
