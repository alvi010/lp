<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DelitoController;
use App\Http\Controllers\PoliciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlertaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(Route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/usuario/perfil",[UsuarioController::class,"perfil"])->name('perfil');
Route::get("/usuario/actualizarPerfil",[UsuarioController::class,"actualizarPerfil"]);

Route::get("/usuario/publicacion",[DelitoController::class,"crear"]);
Route::post("/usuario/publicacion",[DelitoController::class,"guardar"]);

Route::get("/publicaciones",[DelitoController::class,"mostrarDatosGuardados"]);
Route::get("/perfil",[UsuarioController::class,"perfil"]);

Route::get("/policia/comisaria",[PoliciaController::class,"mostrarComisaria"]);
Route::get("/policia/delito",[PoliciaController::class,"mostrarDelitos"]);
