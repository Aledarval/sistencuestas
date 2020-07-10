<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nueva()
    {
        return view('empresas.form');
    }

    public function crear(Request $request)
    {
        $empresa = new Empresa();
        $empresa->rif = $request->input('rif');
        $empresa->nombreempresa = $request->input('nombre_empresa');
        $empresa->razonsocial = $request->input('razon');
        $empresa->correo = $request->input('correo');
        $empresa->direccionfiscal = $request->input('direccionfis');
        $empresa->telefono = $request->input('telefono');
        $empresa->save();
        return redirect('/empresas');
    }

    public function editar($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.editar', compact('empresa'));
    }

    public function modificar($id, Request $request)
    {
        $empresa = Empresa::find($id);
        $empresa->rif = $request->input('rif');
        $empresa->nombreempresa = $request->input('nombre_empresa');
        $empresa->razonsocial = $request->input('razon');
        $empresa->correo = $request->input('correo');
        $empresa->direccionfiscal = $request->input('direccionfis');
        $empresa->telefono = $request->input('telefono');
        $empresa->save();
        return redirect('/empresas');
    }

    public function eliminar($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect('/empresas');
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
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
