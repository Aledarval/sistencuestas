@extends('layouts.template')
@section('title', 'Empresa')
@section('menu')
    @parent
     <a href="#">Link desde empresa</a>
@endsection
@section('content')
<br/>
<a href="{{route('empresa.nueva')}}" class="btn btn-primary mb-4 float-right">Nuevo</a>

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
        @foreach ($empresas as $empresa)
        <tr>
            <td>{{ $empresa->id }}</td>
            <td>{{ $empresa->NombreEmpresa }}</td>
            <td><a href="{{ route('empresa.editar',['id'=>$empresa->id]) }}">Editar</a></td>
            <td><a href="{{ route('empresa.eliminar',['id'=>$empresa->id]) }}">Eliminar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
