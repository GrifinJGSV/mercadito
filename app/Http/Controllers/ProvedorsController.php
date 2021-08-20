<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorsController extends Controller
{
    public function indice(){
        $provedors = Provedor::paginate(10);
        return view('IndiceProvedores')
            ->with('provedors',$provedors);
    }

    public function nuevo(){
        return view('almacenarProvedor');
    } 

    /*funcion para guardar un nuevo profesor*/
    public function guardar(Request $request){
        //validaciones
        $request->validate([
            'nombreProvedor'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'nombreContactoProvedor'=>'required',
        ]);

        $nuevoProvedor = new Provedor();

        //formulario
        $nuevoProvedor->nombreProvedor = $request->input('nombreProvedor');
        $nuevoProvedor->correo = $request->input('correo');
        $nuevoProvedor->telefono = $request->input('telefono');
        $nuevoProvedor->nombreContactoProvedor = $request->input('nombreContactoProvedor');


        $creado = $nuevoProvedor->save();

        if ($creado){
            return redirect()->route('provedors.indice')
                ->with('mensaje', 'el provedor fue creado exitosamente!');
        }else{
            //retornar con un msj de error
            abort(404);
        }
    }

    public function editar($id){
        $provedor = Provedor::findOrFail($id);
        return view('editarProvedor')
            ->with('provedor',$provedor);
    }

    public function actualizar(Request $request,$id){

        $request->validate([
            'nombreProvedor'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'nombreContactoProvedor'=>'required',
        ]);

        $provedor = Provedor::findOrFail($id);

        $provedor->nombreProvedor = $request->input('nombreProvedor');
        $provedor->correo = $request->input('correo');
        $provedor->telefono = $request->input('telefono');
        $provedor->nombreContactoProvedor = $request->input('nombreContactoProvedor');

        $creado = $provedor->save();

        if ($creado){
            return redirect()->route('provedors.indice')
                ->with('mensaje', 'el provedor fue modificado exitosamente!');
        }else{
            //retornar con un msj de error
        }

    }

    public function destruir($id){

        Provedor::destroy($id);

        return redirect('/')
            ->with('mensaje','producto borrado completamente');
    }
}
