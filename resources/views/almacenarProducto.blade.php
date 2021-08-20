@extends('Plantilla')
@section('titulo')
    nuevo producto
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

    <h2>crear un nuevo producto</h2>
    
    <form method="post" action="" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ingresar nombre del producto">
        </div>
        <div class="form-group">
            <label for="apellido">categoria:</label>
            <input type="text" class="form-control" name="categoria" id="categoria" placeholder="ingrese la categoria" >
        </div>
        <div class="form-group">
            <label for="identidad">Precio de compra:</label>
            <input type="text" class="form-control" name="precioCompra" id="precioCompra" placeholder="ingrese el precio de compra" >
        </div>
        <div class="form-group">
            <label for="Cuenta">Prcio de venta:</label>
            <input type="number" class="form-control" name="precioVenta" id="precioVenta" placeholder="ingrese el precio de venta">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">borrar</button>

    </form>
@endsection

