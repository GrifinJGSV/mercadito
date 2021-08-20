@extends('plantilla')
@section('titulo')
    <h2>Mercadito</h2>
    @section('content')
    <a class="btn btn-primary" href="{{route('producto.nuevo')}}">Nuevo</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">categoria</th>
            <th scope="col">Precio de Compra</th>
            <th scope="col">Precio de venta</th>
            <th scope="col">editar</th>
            <th scope="col">borrar</th>
        </tr>
        </thead>
        <tbody>
        @forelse($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->PrecioCompra}}</td>
                <td>{{$producto->PrecioVenta}}</td>
                <td><a class="btn btn-warning" href="{{route('producto.editar',['id'=>$producto->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('producto.borrar',['id'=>$producto->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <th scope="row">no hay productos</th>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{$productos->links()}}
    @endsection
@endsection
