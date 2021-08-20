@extends('plantilla')
@section('titulo')
    actualizar datos del proveedor
@endsection
@section('content')
    <br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>editar datos del provedor</h2>
    <form method="post" action="{{route('provedors.actualizar',['id'=>$provedor->id])}}" class="form-group">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombreProvedor"
                   id="nombreProvedor"  value="{{$provedor->nombre}}">
        </div>
        <div class="form-group">
            <label for="profesion">correo:</label>
            <input type="text" class="form-control" name="correo"
                   id="correo"  value="{{$provedor->correo}}">
        </div>
        </div>
        <div class="form-group">
            <label for="identidad">telefono:</label>
            <input type="number" class="form-control" name="telefono"
                   id="telefono"  value="{{$provedor->telefono}}">
        </div>
        <div class="form-group">
            <label for="tipoContrato">Nombre del contacto  del proveedor:</label>
            <input type="text" class="form-control" name="nombreContactoProvedor"
                   id="nombreContactoProvedor"  value="{{$provedor->nombreContactoProvedor}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>

    </form>
@endsection