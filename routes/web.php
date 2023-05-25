<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
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
    return view('registro');
});

Route::view('/login','auth.login');

//-------------------------------------------------------------
// Route::get('/', [AuthController::class, 'login'])->name('login');
// Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
// Route::get('/inicio', [Admin::class, 'index'])->name('inicio');
// Route::view('index','admin/index');
