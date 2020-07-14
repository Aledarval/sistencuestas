@extends('layouts.template')
@section('title', 'Estado')
@section('content')
<form action="{{route('estado.modificar', ['id'=>$estado->id])}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" value="{{ $estado->estado }}">
        </div>
        <div class="form-group col-md-4">
            <label for="estatus">Estatus</label>
            <select name="estatus" id="estatus" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion" class="form-control" rows="3">{{ $estado->descripcion }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection
