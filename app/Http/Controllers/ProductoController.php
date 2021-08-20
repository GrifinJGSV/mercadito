<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function indice(){
        $productos = Producto::paginate(10);
        return view('ProductosIndice')
            ->with('productos',$productos);
    }

    public function nuevo(){
        return view('almacenarProducto');
    }

    /*funcion para guardar un nuevo profesor*/
    public function guardar(Request $request){
        //validaciones
        $request->validate([
            'nombre'=>'required',
            'categoria'=>'required',
            'precioVenta'=>'required',
            'precioCompra'=>'required',
        ]);

        $nuevoProducto = new Producto();

        //formulario
        $nuevoProducto->nombre = $request->input('nombre');
        $nuevoProducto->categoria = $request->input('categoria');
        $nuevoProducto->precioVenta = $request->input('precioVenta');
        $nuevoProducto->precioCompra = $request->input('precioCompra');


        $creado = $nuevoProducto->save();

        if ($creado){
            return redirect()->route('productos.indice')
                ->with('mensaje', 'el producto fue creado exitosamente!');
        }else{
            //retornar con un msj de error
            abort(404);
        }
    }

    public function editar($id){
        $producto = Producto::findOrFail($id);
        return view('editarProducto')
            ->with('producto',$producto);
    }

    public function actualizar(Request $request,$id){

        $request->validate([
            'nombre'=>'required',
            'categoria'=>'required',
            'precioVenta'=>'required',
            'precioCompra'=>'required'
        ]);

        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->categoria = $request->input('categoria');
        $producto->precioCompra = $request->input('precioVenta');
        $producto->precioVenta = $request->input('precioCompra');

        $creado = $producto->save();

        if ($creado){
            return redirect()->route('productos.indice')
                ->with('mensaje', 'el producto fue modificado exitosamente!');
        }else{
            //retornar con un msj de error
        }

    }

    public function destruir($id){

        Producto::destroy($id);

        return redirect('/')
            ->with('mensaje','producto borrado completamente');
    }

}
