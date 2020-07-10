<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nueva()
    {
        return view('estados.form');
    }
    
    
    public function crear(Request $request)
    {
        $estado = new Estado();
        $estado->estadoencuesta = $request->input('rif');
        $estado->save();
        return redirect('/estados');
    }

    public function editar($id)
    {
        $estado = Estado::find($id);
        return view('estados.editar', compact('estado'));
    }

    public function modificar($id, Request $request)
    {
        $estado = Estado::find($id);
        $estado->estadoencuesta = $request->input('estadoencuesta');
        $estado->save();
        return redirect('/estados');
    }

    public function eliminar($id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return redirect('/estados');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
