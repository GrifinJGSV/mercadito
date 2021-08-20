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

    <h2>crear un nuevo cliente</h2>
    
    <form method="post" action="" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ingresar nombre del producto">
        </div>
        <div class="form-group">
            <label for="numero">numero:</label>
            <input type="number" class="form-control" name="numero" id="numero" placeholder="ingrese su numero" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger">borrar</button>

    </form>
@endsection