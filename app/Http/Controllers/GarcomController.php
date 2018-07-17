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
        $garcoms = Garcom::orderBy('nome', 'asc')->paginate(4);
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
        $this->validate($request, [
            'nome' => 'bail|required|unique:garcoms|max:100|min:3|alpha'
        ]);
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
        return view('garcoms.edit', ['garcom' => $garcom]);
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
        $garcom->update($request->all());
        return redirect('garcoms');
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
