@extends('layout.app')

@section('content')
<div class="container-xxl">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Lista de Clientes</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Registro</a>
        </div>
    </div>
    
    <div class="tabla-centrada">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Pais</th>
                    <th>Fecha nacimiento</th>
                    <th>Género</th>
                    <th>Notas</th>
                    <th>Fecha registro</th>
                    <th>Ocupación</th>
                    <th id="opciones">Opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->pais }}</td>
                    <td>{{ $cliente->fecha_nacimiento }}</td>
                    <td>{{ $cliente->genero }}</td>
                    <td>{{ $cliente->notas }}</td>
                    <td>{{ $cliente->fecha_registro }}</td>
                    <td>{{ $cliente->ocupacion }}</td>
            
                    <td id="opciones-contenido">
                        <a href="{{ secureUrl(route('clientes.edit',['id'=>$cliente->id])) }}" class="btn btn-sm btn-success">Editar</a>
                        <form action="{{ route('clientes.destroy', ['id'=>$cliente->id]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
