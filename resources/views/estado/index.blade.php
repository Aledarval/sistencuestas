@extends('layouts.template')
@section('title', 'Estado')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Estado</h3>
      <a href="{{route('estado.nueva')}}" class="btn btn-primary mb-4 float-right">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover" id="tblEstado">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }}</td>
                        <td>{{ $estado->estado }}</td>
                        <td>{{ $estado->descripcion }}</td>
                        <td><a href="{{ route('estado.editar',['id'=>$estado->id]) }}">Editar</a></td>
                        <td><a href="{{ route('estado.eliminar',['id'=>$estado->id]) }}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#tblEstado').dataTable();
        })
    </script>
@endpush
