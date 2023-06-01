<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RutasProtegidasAdmin;
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


/*Rutas del administrador*/
Route::get('/dashboard',[RutasProtegidasAdmin::class,'dashboard'])->name('dashboard');

/*Rutas de los estudiantes*/


/*Rutas del servicio*/



