@extends('layouts.template')
@section('title', 'Empresa')
@section('content')
<form action="{{route('empresa.crear')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="inputAddress">Nombre de la empresa</label>
        <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" placeholder="Nombre de la empresa">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="rif">Rif</label>
            <input type="text" class="form-control" name="rif" id="rif" placeholder="Rif">
        </div>
        <div class="form-group col-md-4">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
        </div>
        <div class="form-group col-md-4">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="razon">Razon social</label>
            <input type="text" class="form-control" name="razon" id="razon" placeholder="Razon social">
        </div>
    </div>
    <div class="form-group">
      <label for="direccionfis">Direccion Fiscal</label>
      <textarea id="direccionfis" name="direccionfis" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection
