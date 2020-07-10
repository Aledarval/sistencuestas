@extends('layouts.template')
@section('title', 'Empresa')
@section('content')
<form action="{{ route('empresa.modificar',['id'=>$empresa->id]) }}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="form-group">
        <label for="inputAddress">Nombre de la empresa</label>
        <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" value="{{ $empresa->NombreEmpresa }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="rif">Rif</label>
            <input type="text" class="form-control" name="rif" id="rif" value="{{ $empresa->Rif }}">
        </div>
        <div class="form-group col-md-4">
            <label for="correo">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo" value="{{ $empresa->Correo }}">
        </div>
        <div class="form-group col-md-4">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $empresa->Telefono }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="razon">Razon social</label>
            <input type="text" class="form-control" name="razon" id="razon" value="{{ $empresa->RazonSocial }}">
        </div>
    </div>
    <div class="form-group">
      <label for="direccionfis">Direccion Fiscal</label>
      <textarea id="direccionfis" name="direccionfis" class="form-control" rows="3">{{ $empresa->DireccionFiscal }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection
