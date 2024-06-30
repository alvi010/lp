<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Delito;
class DelitoController extends Controller
{
    public function crear(){
      if(!Auth::check()){
        return redirect(Route('login'));
    }else{
        return view("publicacion.crear");
      }  }
    
      public function guardar(Request $request){

        $delito = new Delito();
        $delito->titulo = $request->input("titulo");
        $delito->tipo = $request->input("tipo");
        $delito->descripcion = $request->input("descripcion");
        $delito->ubicacion = $request->input("ubicacion");
        $delito->policia_id = $request["policia_id"];
        $delito->save();
    
        $delitos = Delito::all(); 
    
        return view("publicacion.mostrar", compact('delitos'));
    }
    public function mostrarDatosGuardados(){
      $delitos = Delito::all(); 
      return view("publicacion.mostrar", compact('delitos'));
  }
}
