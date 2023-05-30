<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
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
Route::view('/registro','registro');



/*Rutas del administrador*/
Route::view('/dashboard','auth.dashboard')->name('dashboard');

/*Rutas de los estudiantes*/


/*Rutas del servicio*/


//-------------------------------------------------------------
// Route::get('/', [AuthController::class, 'login'])->name('login');
// Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
// Route::get('/inicio', [Admin::class, 'index'])->name('inicio');
// Route::view('index','admin/index');
