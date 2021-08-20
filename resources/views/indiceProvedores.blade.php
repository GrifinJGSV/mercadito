@extends('plantilla')
@section('titulo')
    @section('content')
    <h3>Proveedores <a class="btn btn-primary"  href="{{route('provedor.nuevo')}}">Nuevo</a></h3>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre del proveedor</th>
            <th scope="col">correo</th>
            <th scope="col">telefono</th>
            <th scope="col">Nombre del contacto del proveedor</th>
            <th scope="col">editar</th>
            <th scope="col">borrar</th>
        </tr>
        </thead>
        <tbody>
                @forelse($provedors as $provedor)
                    <tr>
                        <td>{{$provedor->id}}</td>
                        <td>{{$provedor->nombreProvedor}}</td>
                        <td>{{$provedor->correo}}</td>
                        <td>{{$provedor->telefono}}</td>
                        <td>{{$provedor->nombreContactoProvedor}}</td>
                        <td><a class="btn btn-warning" href="{{route('provedors.editar',['id'=>$provedor->id])}}">Editar</a></td>
                        <td>
                            <form method="post" action="{{route('provedor.borrar',['id'=>$provedor->id])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
        
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">no hay provedores</th>
                    </tr>
                @endforelse
        </tbody>
    </table>
    {{$provedors->links()}}
    @endsection
@endsection