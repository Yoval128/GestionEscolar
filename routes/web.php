<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoAlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CarreraGrupoController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::name('alumno')->get('/alumnos', [AlumnoController::class, 'alumno']);
Route::name('alumno_alta')->get('/alumnos_alta', [AlumnoController::class, 'alumno_alta']);
Route::name('alumno_registrar')->post('/alumnos_registrar', [AlumnoController::class, 'alumno_registrar']);
Route::name('alumno_editar')->get('/alumno_editar/{id}', [AlumnoController::class, 'alumno_editar']);
Route::name('alumno_actualizar')->put('/alumno_actualizar/{id}', [AlumnoController::class, 'alumno_actualizar']);
Route::name('alumno_borrar')->get('/alumno_borrar/{id}', [AlumnoController::class, 'alumno_borrar']);
Route::name('alumno_detalle')->get('/alumno_detalle/{id}', [AlumnoController::class, 'alumno_detalle']);


Route::name('grupo')->get('/grupos', [GrupoController::class, 'grupo']);
Route::name('grupo_alta')->get('/grupos_alta', [GrupoController::class, 'grupo_alta']);
Route::name('grupo_registrar')->post('/grupos_registrar', [GrupoController::class, 'grupo_registrar']);
Route::name('grupo_editar')->get('/grupo_editar/{id}', [GrupoController::class, 'grupo_editar']);
Route::name('grupo_actualizar')->put('/grupo_actualizar/{id}', [GrupoController::class, 'grupo_actualizar']);
Route::name('grupo_borrar')->get('/grupo_borrar/{id}', [GrupoController::class, 'grupo_borrar']);


Route::name ('asignacion')->get('/asignacion', [GrupoAlumnoController::class, 'asignacion']);
Route::name ('asignacion_registrar')->post('/asignacion_registrar',[GrupoAlumnoController::class, 'asignacion_registrar']);
Route::name ('asignacion_borrar')->get('/asignacion_borrar/{id}',[GrupoAlumnoController::class,'asignacion_borrar']);


Route::name('carrera')->get('/carrera',[CarreraController::class,'carrera']);
Route::name('carrera_alta')->get('/carrera_alta',[CarreraController::class,'carrera_alta']);
Route::name('carrera_registrar')->post('/carrera_registrar', [CarreraController::class, 'carrera_registrar']);
Route::name('carrera_editar')->get('/carrera_editar/{id}', [CarreraController::class, 'carrera_editar']);
Route::name('carrera_actualizar')->put('/carrera_actualizar/{id}', [CarreraController::class, 'carrera_actualizar']);
Route::name('carrera_borrar')->get('/carrera_borrar/{id}', [CarreraController::class, 'carrera_borrar']);


Route::name('carrera_grupo')->get('/carrera_grupo',[CarreraGrupoController::class,'carrera_grupo']);
Route::name('carrera_grupo_alta')->get('/carrera_grupo_alta',[CarreraGrupoController::class,'carrera_grupo_alta']);
Route::name('carrera_grupo_registrar')->post('/carrera_grupo_registrar', [CarreraGrupoController::class, 'carrera_grupo_registrar']);
Route::name('carrera_grupo_editar')->get('/carrera_grupo_editar/{id}', [CarreraGrupoController::class, 'carrera_grupo_editar']);
Route::name('carrera_grupo_actualizar')->put('/carrera_grupo_actualizar/{id}', [CarreraGrupoController::class, 'carrera_grupo_actualizar']);
Route::name('carrera_grupo_borrar')->get('/carrera_grupo_borrar/{id}', [CarreraGrupoController::class, 'carrera_grupo_borrar']);

