<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function indice(){
        $clientes = Cliente::paginate(10);
        return view('IndiceClientes')
            ->with('clientes',$clientes);
    }

    public function nuevo(){
        return view('almacenarCliente');
    }

    public function guardar(Request $request){
        //validaciones
        $request->validate([
            'nombre'=>'required',
            'numero'=>'required',
        ]);

        $nuevoCliente = new cliente();

        //formulario
        $nuevoCliente->nombre = $request->input('nombre');
        $nuevoCliente->telefono = $request->input('numero');
       


        $creado = $nuevoCliente->save();

        if ($creado){
            return redirect()->route('clientes.indice')
                ->with('mensaje', 'el cliente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
            abort(404);
        }
    }

    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('editarCliente')
            ->with('cliente',$cliente);
    }

    public function actualizar(Request $request,$id){

        $request->validate([
            'nombre'=>'required',
            'numero'=>'required',
            
        ]);

        $cliente = Cliente::findOrFail($id);

        $cliente->nombre = $request->input('nombre');
        $cliente->telefono = $request->input('numero');

        $creado = $cliente->save();

        if ($creado){
            return redirect()->route('clientes.indice')
                ->with('mensaje', 'el cliente fue modificado exitosamente!');
        }else{
            //retornar con un msj de error
        }

    }

    public function destruir($id){

        Cliente::destroy($id);

        return redirect('/')
            ->with('mensaje','producto borrado completamente');
    }

}
