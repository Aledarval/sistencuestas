@extends('layouts.template')
@section('title', 'Estado')
@section('content')
<form action="{{route('estado.crear')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="inputAddress">Nombre del estado de la encuesta</label>
        <input type="text" class="form-control" name="nombre_estado" id="nombre_estado" placeholder="Nombre de la empresa">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="estadoencuesta">Estado de la Encuesta</label>
            <input type="text" class="form-control" name="estadoencuesta" id="estadoencuesta" placeholder="Estado">
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection
