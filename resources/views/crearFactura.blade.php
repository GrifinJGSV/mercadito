@extends('Plantilla')
@section('titulo', 'Mercadito')
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

    <h2>crear una factura</h2>

    <form id="factura_select" method="post" action="{{route('factura.guardar')}}">
        @csrf
        <div>
            <select class="form-select" aria-label="Default select example" name="id_cliente">
                <option disabled selected>Selecione un cliente:</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">
                        {{ "{$cliente->nombre}" }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="form-select" aria-label="Default select example" multiple="multiple" name="id_productos[]">
                <option disabled selected>Selecione un productos:</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">
                        {{ "{$producto->nombre}" }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" >crear</button>
    </form>

@endsection
