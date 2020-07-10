@extends('layouts.template')
@section('title', 'Estado')
@section('menu')
    @parent
     <a href="#"></a>
@endsection
@section('content')
<br/>
<a href="{{route('estado.nueva')}}" class="btn btn-primary mb-4 float-right">Nuevo</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estados as $estado)
        <tr>
            <td>{{ $estado->id }}</td>
            <td>{{ $estado->NombreEstado }}</td>
            <td><a href="{{ route('estado.editar',['id'=>$estado->id]) }}">Editar</a></td>
            <td><a href="{{ route('estado.eliminar',['id'=>$estado->id]) }}">Eliminar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
