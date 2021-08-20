<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\Producto;
use Carbon\Carbon;
use PhpParser\Node\Expr\FuncCall;

class FacturaController extends Controller
{
    
    public function indice(){
        $facturas = Factura::paginate(5);
        return view('indiceFactura')->with('facturas', $facturas->load('cliente', 'productos'));
    }

    public function nuevo(){
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('crearFactura', [
            'productos' => $productos,
            'clientes' => $clientes
        ]);
    }

    public function guardar(Request $request){
        //validaciones
        $datos_validados =  
        $request->validate([
            'id_cliente'=>'required',
        ]);
        $ahora = Carbon::now();
        $factura = Factura::create([
            'id_cliente' => $datos_validados['id_cliente'],
            'fecha_venta' => $ahora
        ]);

        foreach($request->id_productos as $id_producto){
            $producto = Producto::find($id_producto);
            $factura->productos()->attach($producto->id, ['precio_venta' => $producto->PrecioVenta]);
        }
        return redirect()->route('factura.indice');

    }

    public function editar($id){
        return view('editarFactura');
    }
}
