<?php

use App\Http\Controllers\AplicacionController;
use Illuminate\Support\Facades\Route;

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
    return view('tiendavistas.login');
});

Route::resource('tienda', AplicacionController::class);

//Rutas de Login y registro

Route::get('mostrarRegistro', [AplicacionController::class, 'mostrarRegistro'])->name('tienda.registro');
Route::get('mostrarLogin', [AplicacionController::class, 'mostrarLogin'])->name('tienda.login');
Route::get('registrar', [AplicacionController::class, 'registrar'])->name('tienda.registrar');
Route::get('login', [AplicacionController::class, 'login'])->name('tienda.login');
Route::get('mostrarAdministracion', [AplicacionController::class, 'mostrarAdministracion'])->name('tienda.veradministracion');

//Rutas de administracion

Route::get('mostrarCRUDcatalogo', [AplicacionController::class, 'mostrarCRUDcatalogo'])->name('tienda.Mirarcrudcatalogo');
Route::get('mostrarCRUDcategoria', [AplicacionController::class, 'mostrarCRUDcategoria'])->name('tienda.Mirarcrudcategoria');
Route::get('mostrarCRUDusuario', [AplicacionController::class, 'mostrarCRUDusuario'])->name('tienda.Mirarcrudusuario');

//Routes de funciones de crud usuario
Route::get('registrarcomoAdmin', [AplicacionController::class, 'registrarcomoAdmin'])->name('tienda.registrarporAdmin');
Route::get('/tiendavistas/crudusuario', [AplicacionController::class, 'verUsuarios'])->name('tienda.verUsuarios');
