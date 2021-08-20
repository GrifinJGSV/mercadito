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

    <h2>editar datos del cliente</h2>
    <form method="post" action="{{route('clientes.actualizar',['id'=>$cliente->id])}}" class="form-group">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre"
                   id="nombre"  value="{{$cliente->nombre}}">
        </div>
        </div>
        <div class="form-group">
            <label for="identidad">numero:</label>
            <input type="number" class="form-control" name="numero"
                   id="numero"  value="{{$cliente->numero}}">
        </div>
        

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>

    </form>
@endsection