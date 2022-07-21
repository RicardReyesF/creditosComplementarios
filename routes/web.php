<?php

use Illuminate\Support\Facades\Route;

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
    return view('formulario');
});



Route::get('/formulario',[\App\Http\Controllers\formularioController::class,'formulario'])->name('Formulario');
//Route::get('/home1',[\App\Http\Controllers\solicitudAlumno::class,'no'])->name('No');
Route::get('/alumnos',[\App\Http\Controllers\alumnosController::class,'alumnos'])->name('Alumnos');
Route::get('/descarga',[\App\Http\Controllers\descargaController::class,'descarga'])->name('Descarga');
Route::get('/administrador',[\App\Http\Controllers\administradorController::class,'administrador'])->name('Administrador');
Route::get('/registro',[\App\Http\Controllers\registroController::class,'registro'])->name('Registro');
Route::get('/actividadnueva',[\App\Http\Controllers\actividadnueva::class,'actividadnueva'])->name('Actividadnueva');
Route::get('/Modificar-Actividad/{id}',[\App\Http\Controllers\modificarActividad::class,'modificar'])->name('Modificar');
Route::get('/solicitudes',[\App\Http\Controllers\solicitudesController::class,'solicitudes'])->name('Solicitudes');
Route::get('/liberaciones',[\App\Http\Controllers\liberacionesController::class,'liberaciones'])->name('Liberaciones');
Route::get('/reporte/export',[\App\Http\Controllers\reporteController::class,'export'])->name('Export');
Route::post('/actividadnueva/create',[\App\Http\Controllers\actividadnueva::class,'create'])->name('Actividadnueva1');
Route::get('/actualizar/{id}',[\App\Http\Controllers\modificarActividad::class,'actualizar'])->name('Actualizar');
Route::get('/eliminar/{id}',[\App\Http\Controllers\eliminarActividad::class,'eliminar'])->name('Eliminar');
Route::get('/solicitud/actividad/{id}',[\App\Http\Controllers\solicitudController::class,'insertar'])->name('Solicitud');
Route::get('/solicitud/aceptar/{id}',[\App\Http\Controllers\solicitudesController::class,'aceptar'])->name('AceptarSolicitud');
Route::get('/solicitud/denegar/{id}',[\App\Http\Controllers\solicitudesController::class,'denegar'])->name('DenegarSolicitud');
Route::get('/liberar',[\App\Http\Controllers\liberacionesController::class,'liberar'])->name('LiberarSolicitud');
Route::get('/constancia/pdf',[\App\Http\Controllers\descargaController::class,'pdf'])->name('Constancia');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
