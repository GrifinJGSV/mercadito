@extends('plantilla')
@section('titulo', 'Mercadito')
    @section('content')
    {{-- <a class="btn btn-primary"  href="{{route('provedor.nuevo')}}">Nuevo</a> --}}
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
                @forelse($facturas as $factura)
                    <tr>
                        <td>{{$factura->id}}</td>
                        <td>{{$factura->cliente->nombre}}</td>
                        <td>{{$factura->fecha_venta}}</td>                        
                        {{-- <td><a class="btn btn-warning" href="{{route('provedors.editar',['id'=>$provedor->id])}}">Editar</a></td>
                        <td>
                            <form method="post" action="{{route('provedor.borrar',['id'=>$provedor->id])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
        
                        </td> --}}
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