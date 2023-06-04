<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RutasProtegidasAdminController;
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
/*Rutas del login*/

Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/nuevoAdmin',[LoginController::class,'nuevoAdmin'])->name('nuevoAdmin'); 
Route::post('/accesoLogin',[LoginController::class,'accesoLogin'])->name('accesoLogin');
Route::view('/registro','admin.registro');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::view('/hoursRegister','admin.hoursRegister');
Route::view('/credit','admin.credit');

/*Rutas del administrador*/
Route::get('/dashboard',[RutasProtegidasAdminController::class,'dashboard'])->name('dashboard');
Route::get('/registro',[RutasProtegidasAdminController::class,'registro'])->name('registro');
Route::post('/registro_post',[RutasProtegidasAdminController::class,'registro_post'])->name('registroPost');

Route::get('/registrar_horas',[RutasProtegidasAdminController::class,'registrar_horas'])->name('registrarHoras');
/*Rutas de los estudiantes*/


/*Rutas del servicio*/



