<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ProcedimientoMedicoController;


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
//Ruta home
Route::get('/', function () {
    return view('home');
});

//Ruta ver procedimiento
Route::get('ver_procedimiento/{id}', function ($id) {
    //obtener el procedimiento
    $procedimiento = App\Models\Procedimiento::find($id);
    return view('ver_procedimiento', compact('procedimiento'));
})->name('ver_procedimiento');

//Ruta para revista (cacncer de mama)
Route::get('/revista/cancer_mama', function(){
    return view('revista.cancer_mama');
})->name('cancer_mama');

//Ruta para revista (braquioplastia)
Route::get('/revista/braquioplastia', function(){
    return view('revista.braquioplastia');
})->name('braquioplastia');

//Ruta para revista (ginecomastia)
Route::get('/revista/ginecomastia', function(){
    return view('revista.ginecomastia');
})->name('ginecomastia');

//Ruta para revista (cirugía reconstructiva en mexico)
Route::get('/revista/cirugia', function(){
    return view('revista.cirugia');
})->name('cirugia');

//Ruta para revista (cirugía plastica)
Route::get('/revista/cirugia_plastica', function(){
    return view('revista.cirugia_plastica');
})->name('cirugia_plastica');

//Ruta para horarios
Route::get('/revista/horarios', function(){
    return view('revista.horarios');
})->name('horarios');

//Ruta para contacto
Route::get('/revista/contacto', function(){
    return view('revista.contacto');
})->name('contacto');

//Ruta para Acerca de nosotros
Route::get('/revista/acercade', function(){
    return view('revista.acercade');
})->name('acercade');

//Ruta para nuestros servicios
Route::get('/revista/servicios', function(){
    return view('revista.servicios');
})->name('servicios');



//Ruta dashboard
Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

//Ruta procedimientos
Route::resource('/procedimientos', ProcedimientoController::class)->middleware(['auth', 'rol:admin']);

//Ruta usuarios
Route::resource('/usuarios', UserController::class)->middleware(['auth', 'rol:admin'])->parameter('usuarios', 'user');
//Ruta cambiar contraseña de usuario
Route::put('/usuarios/{user}/password', [UserController::class, 'password'])->name('usuarios.password')->middleware(['auth', 'rol:admin']);
//Ruta estado usuario (activar/desactivar usuario)
Route::put('/usuarios/{user}/estado', [UserController::class, 'estado'])->name('usuarios.estado')->middleware(['auth', 'rol:admin']);

//Ruta agendas
Route::resource('/agendas', AgendaController::class)->middleware(['auth', 'rol:admin']);

//Rutas citas
Route::resource('/citas', CitaController::class)->middleware(['auth']);
//Buscar citas
Route::get('/citas_buscar', [CitaController::class, 'buscar'])->name('citas.buscar')->middleware(['auth']);
//Ver Citas disponibles
Route::post('/citas_disponibles', [CitaController::class, 'disponibles'])->name('citas.disponibles')->middleware(['auth']);

//Cancelar citas
Route::put('/citas/{cita}/cancelar', [CitaController::class, 'cancelar'])->name('citas.cancelar')->middleware(['auth']);

//Agenda del día para médico
Route::get('/citas_agenda', [CitaController::class, 'agenda'])->name('citas.agenda_dia')->middleware(['auth', 'rol:medico']); 

// Route::get('/procedimiento_medico_crear', [CitaController::class, 'procedimiento_medico_crear'])->name('procedimiento.medico.crear')->middleware(['auth', 'rol:medico']); 
// Route::post('/procedimiento_medico_crear', [CitaController::class, 'procedimiento_medico_store'])->name('procedimiento.medico.store')->middleware(['auth', 'rol:medico']); 

//Ruta para que el medico pueda solicitar una cita para el paciente de acuerdo al nombre del paciente y la fecha
Route::get('/cita_procedimiento_crear', [CitaController::class, 'cita_procedimiento_crear'])->name('cita.procedimiento.crear')->middleware(['auth', 'rol:medico']);
//Ruta para guardar la cita solicitada
Route::post('/cita_procedimiento_crear', [CitaController::class, 'cita_procedimiento_guardar'])->name('cita.procedimiento.guardar')->middleware(['auth', 'rol:medico']);
//Ruta de lista procedimientos programados por el medico
Route::get('/procedimientos_programados', [CitaController::class, 'procedimientos_programados'])->name('procedimientos.programados')->middleware(['auth', 'rol:medico']);

//Ruta para buscar agendas disponibles de acuerdo al nombre del procedimiento
Route::get('/agendas_disponibles/{procedimiento}', [AgendaController::class, 'agendas_disponibles'])->name('agendas.disponibles')->middleware(['auth', 'rol:medico']);
//Ruta para buscar pacientes
Route::get('/buscar_paciente/{paciente}', [UserController::class, 'buscar_paciente'])->name('buscar.paciente')->middleware(['auth', 'rol:medico']);

//Historial citas
Route::get('/citas_historial', [CitaController::class, 'historial'])->name('citas.historial_medico')->middleware(['auth', 'rol:medico']); 

//Atención citas
Route::get('/citas_atender/{cita}', [CitaController::class, 'atender'])->name('citas.atender')->middleware(['auth', 'rol:medico']); 

Route::put('/citas_atender/{cita}', [CitaController::class, 'registra'])->name('citas.registra')->middleware(['auth', 'rol:medico']); 


Route::get('/citas/{cita}/detalle', [CitaController::class, 'detalle'])->name('citas.detalle')->middleware(['auth', 'rol:medico']); 

//Historiales (administrador)(agendadas,atendidas,canceladas,procedimientos)
Route::get('/historial', [HistorialController::class, 'index'])->name('historial.index')->middleware(['auth', 'rol:admin']); 

Route::get('/historial/reporte/{tipo}', [HistorialController::class, 'reporte'])->name('historial.reporte')->middleware(['auth', 'rol:admin']); 

//Ruta para crear los backups
Route::get('/crear_backup',[BackupController::class, 'crear_backup'])->name('crear_backup')->middleware(['auth', 'rol:admin']);

//Ruta listar backup
Route::get('/listar_backup',[BackupController::class, 'listar_backup'])->name('listar_backup')->middleware(['auth', 'rol:admin']);

//Ruta descargar backup
Route::get('/descargar_backup/{archivo}',[BackupController::class, 'descargar_backup'])->name('descargar_backup')->middleware(['auth', 'rol:admin']);

//Ruta eliminar backup
Route::get('/eliminar_backup/{archivo}',[BackupController::class, 'eliminar_backup'])->name('eliminar_backup')->middleware(['auth', 'rol:admin']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
