<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\policia;
use App\Models\alerta;
class PoliciaController extends Controller
{
    public function mostrarComisaria(){

        $policias = Policia::All();
        return view('policia.comisaria', compact('policias'));
    }
    public function mostrarDelitos(){

        $alertas = Alerta::All();
        return view('policia.delitos', compact('alertas'));
    }
}
