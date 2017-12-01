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

Route::post('/login', 'AuthController@authenticate');

Route::group(['middleware'=>'jwt.auth'], function () {
	Route::apiResource('apuntes','ApunteController');
	Route::apiResource('actividades','ActividadController');
	Route::apiResource('asignaturas','AsignaturaController');
	Route::apiResource('docentes','DocenteController');
	Route::apiResource('instituciones','InstitucionController');
	Route::apiResource('notas','NotaController');
	Route::apiResource('tipos_actividades','Tipo_actividadController');
});
Route::apiResource('usuarios','UsuarioController');
