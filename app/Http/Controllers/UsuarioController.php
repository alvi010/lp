<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    public function perfil()
    {
        return view('usuario.perfil');
    }

    public function actualizarPerfil(Request $request)
{
    $user = Auth::user();

    $this->validate($request, [
        'nombre' => 'required|max:255',
        'apellidos' => 'required|max:255',
        'numero' => 'required|max:9',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
    ]);

    $usuario->nombre = $request->nombre;
    $usuario->apellidos = $request->apellidos;
    $usuario->numero = $request->numero;
    $usuario->nombre = $request->nombre;
    $usuario->password = $request->password;
    $usuario->email = $request->email;
    $usuario->save();

    return redirect()->route('usuario.perfil')->with('info', 'Perfil actualizado correctamente');
}
}
