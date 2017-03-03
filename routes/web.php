<?php

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

Route::get('/pacientes' , 'PacienteController@index');
Route::get('/pacientes/cria' , 'PacienteController@cria');
Route::post('/pacientes' , 'PacienteController@armazena');

Route::get('/medicos' , 'MedicoController@index');
Route::get('/medicos/cria' , 'MedicoController@cria');
Route::post('/medicos' , 'MedicoController@armazena');

Route::get('/exames' , 'ExameController@index');
Route::get('/exames/cria' , 'ExameController@cria');
Route::post('/exames' , 'ExameController@armazena');
