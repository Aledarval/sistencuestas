@extends('layouts.template')
@section('title', 'Estado')
@section('menu')
@endsection
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@endpush

@section('content')
<br/>
<a href="{{route('estado.nueva')}}" class="btn btn-primary mb-4 float-right">Nuevo</a>
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

<div class="row">
    <div class="col-12" style="background-color: red;height: 20px;"></div>
</div>
<br>
<div class="row">
    <div class="col-6" style="background-color: green;height: 20px;"></div>
    <div class="col-6" style="background-color: blue;height: 20px;"></div>
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
