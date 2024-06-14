@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ isset($cliente) ? 'Editar Cliente' : 'Nuevo Cliente' }}</h2>
        </div>
        <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
            @csrf
            @if (isset($cliente))
                @method('PUT')
            @endif
            <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">   
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ (isset($cliente)) ? $cliente->nombre : old('nombre') }} " >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ (isset($cliente)) ? $cliente->email : old('email') }} " >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Número de Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ (isset($cliente)) ? $cliente->telefono : old('telefono') }} " >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pais" class="form-label">Pais</label>
                                    <select class="form-select" id="pais" name="pais">
                                        @foreach ($paises as $pais)
                                            <option value="{{ $pais->nombre }}" 
                                                @if (isset($cliente) && $cliente->pais == $pais->nombre) 
                                                    selected 
                                                @endif>
                                                {{ $pais->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ isset($cliente) ? $cliente->fecha_nacimiento : old('fecha_nacimiento') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="genero" class="form-label">Género</label>
                                    <select class="form-select" id="genero" name="genero">
                                        @if (isset($cliente))
                                        <option value="{{ $cliente->genero }}">{{ $cliente->genero }}</option>
                                        <option value="male">Masculino</option>
                                        <option value="female">Femenino</option>
                                        <option value="other">Otro</option>
                                        @else
                                            <option value="">Seleccionar</option>
                                            <option value="male">Masculino</option>
                                            <option value="female">Femenino</option>
                                            <option value="other">Otro</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="notas" class="form-label">Notas</label>
                                    <textarea class="form-control" id="notas" name="notas" rows="1" style="height: 38px;" >{{ isset($cliente) ? $cliente->notas : old('notas') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="fecha_registro" class="form-label">Fecha de Registro</label>
                                    <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="{{ isset($cliente) ? $cliente->fecha_registro : old('fecha_nacimiento') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="ocupacion" class="form-label">Ocupación</label>
                                    <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="{{ (isset($cliente)) ? $cliente->ocupacion : old('ocupacion') }}">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="d-block text-end card-footer">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
