<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
class EstadoController extends Controller
{
    public function index()
    {
        //$estados = Estado::all();
        //$estados = Estado::get();
        $estados = Estado::where('estatus', 1)->get();
        return view('estado.index', compact('estados'));
    }

    public function nueva()
    {
        return view('estado.form');
    }

    public function crear(Request $request)
    {
        $estado = new Estado();
        $estado->estado = $request->input('estado');
        $estado->estatus = $request->input('estatus');
        $estado->descripcion = $request->input('descripcion');
        $estado->save();
        return redirect('/estado');
    }

    public function editar($id)
    {
        $estado = Estado::find($id);
        return view('estado.editar', compact('estado'));
    }

    public function modificar($id, Request $request)
    {
        $estado = Estado::find($id);
        $estado->estado = $request->input('estado');
        $estado->estatus = $request->input('estatus');
        $estado->descripcion = $request->input('descripcion');
        $estado->save();
        return redirect('/estado');
    }

    public function eliminar($id)
    {
        $x = Estado::find($id);
        $x->delete();
        return redirect('/estado');
    }
}
