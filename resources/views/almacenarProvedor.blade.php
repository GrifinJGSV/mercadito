@extends('Plantilla')
@section('titulo')
    nuevo provedor
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

    <h2>crear un nuevo proveedor</h2>
    
    <form method="post" action="" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombreProvedor" id="nombreProvedor" placeholder="ingresar nombre del provedor">
        </div>
        <div class="form-group">
            <label for="apellido">correo:</label>
            <input type="text" class="form-control" name="correo" id="correo" placeholder="ingrese el correo" >
        </div>
        <div class="form-group">
            <label for="identidad">numero de telefono:</label>
            <input type="number" class="form-control" name="telefono" id="telefono" placeholder="ingrese el telefono" >
        </div>
        <div class="form-group">
            <label for="Cuenta">contacto de provedor:</label>
            <input type="text" class="form-control" name="nombreContactoProvedor" id="nombreContactoProvedor" placeholder="ingrese el nombre del contacto">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">borrar</button>

    </form>
@endsection

