<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Ruta procedimientos
Route::resource('/procedimientos', ProcedimientoController::class)->middleware(['auth', 'rol:admin']);

//Ruta usuarios
Route::resource('/usuarios', UserController::class)->middleware(['auth', 'rol:admin'])->parameter('usuarios', 'user');
//Ruta cambiar contraseña de usuario
Route::put('/usuarios/{user}/password', [UserController::class, 'password'])->name('usuarios.password')->middleware(['auth', 'rol:admin']);

//Ruta agendas
Route::resource('/agendas', AgendaController::class)->middleware(['auth', 'rol:admin']);

//Rutas citas
Route::resource('/citas', CitaController::class)->middleware(['auth']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
