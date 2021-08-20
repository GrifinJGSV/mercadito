@extends('plantilla')
@section('titulo')
    actualizar datos del producto
@endsection
@section('content')
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Editar datos del producto</h2>
    <form method="post" action="{{ route('producto.actualizar', ['id' => $producto->id]) }}" class="form-group">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}">
        </div>
        <div class="form-group">
            <label for="profesion">Categoria:</label>
            <input type="text" class="form-control" name="categoria" id="categoria" value="{{ $producto->categoria }}">
        </div>
        <div class="form-group">
            <label for="identidad">Precio de compra:</label>
            <input type="number" class="form-control" name="precioVenta" id="precioVenta"
                value="{{ $producto->PrecioVenta }}">
        </div>
        <div class="form-group">
            <label for="tipoContrato">Precio de venta:</label>
            <input type="number" class="form-control" name="precioCompra" id="precioCompra"
                value="{{ $producto->PrecioCompra }}">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">Borrar</button>

    </form>
@endsection
