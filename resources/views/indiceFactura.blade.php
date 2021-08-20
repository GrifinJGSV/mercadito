@extends('plantilla')
@section('titulo', 'Mercadito')
@section('content')
    <h3>Proveedores <a class="btn btn-primary" href="{{ route('factura.nuevo') }}">Nuevo</a></h3>
    <table class="table table-striped table-dark">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Fecha de Venta</th>
                    <th scope="col">editar</th>
                    <th scope="col">borrar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($facturas as $factura)
                    <tr>
                        <td>{{ $factura->id }}</td>
                        <td>{{ $factura->cliente->nombre }}</td>
                        <td>{{ $factura->fecha_venta }}</td>
                        <td><a class="btn btn-warning" href="#">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="#">
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
        {{-- {{$facturas->links()}} --}}
    @endsection
