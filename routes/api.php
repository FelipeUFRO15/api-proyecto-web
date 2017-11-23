<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('apunte','ApunteController');
Route::apiResource('actividad','ActividadController');
Route::apiResource('asignatura','AsignaturaController');
Route::apiResource('docente','DocenteController');
Route::apiResource('institucion','InstitucionController');
Route::apiResource('nota','NotaController');
Route::apiResource('tipo_actividad','Tipo_actividadController');
Route::apiResource('usuario','UsuarioController');