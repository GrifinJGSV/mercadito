@extends('plantilla')
@section('titulo')
    <h2>Mercadito</h2>
    @section('content')
    <h3>clientes</h3>
    <a class="btn btn-primary"  href="{{route('cliente.nuevo')}}">Nuevo</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">telefono</th>
            <th scope="col">editar</th>
            <th scope="col">borrar</th>
        </tr>
        </thead>
        <tbody>
                @forelse($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td><a class="btn btn-warning" href="{{route('clientes.editar',['id'=>$cliente->id])}}">Editar</a></td>
                        <td> <form method="post" action="{{route('cliente.borrar',['id'=>$cliente->id])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form> </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">no hay clientes</th>
                    </tr>
                @endforelse
        </tbody>
    </table>
    {{$clientes->links()}}
    @endsection
@endsection