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


//Route::get('/', function () {
  //  return view('index');
//});
//Route::get('/prueba', function () {
  //  return view('prueba');
    //});
// ES UNA FORMA DE COLOCAR LAS RUTAS PARA LAS VIEW YA QUE ESTAS SE CARGAN DESDE EL CONTROLADOR
//Route::get('/prueba1', 'PruebaController@index');

 //ES UNA FORMA DE COLOCAR LAS RUTAS PARA EL CRUD
//Route::get('/empresas', 'EmpresaController@index');// EL INDEX
//Route::get('/empresas/created','EmpresaController@created');// CREATED
//Route::get('/empresas/edit','EmpresaController@edit);// EDITAR

//FORMA SIMPLE DE CARGAR DE LA VISTA RESOURCE LO QUE ESTA DENTRO DEL CONTROLADOR
//Route::resource('empresas', 'EmpresaController');

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/empresas', 'EmpresaController@index')->name('empresa.index');

Route::get('/empresas/nueva', 'EmpresaController@nueva')->name('empresa.nueva');
Route::post('/empresas/crear', 'EmpresaController@crear')->name('empresa.crear');
Route::get('/encuesta/editar/{id}', 'EmpresaController@editar')->name('empresa.editar');
Route::post('/encuesta/modificar/{id}', 'EmpresaController@modificar')->name('empresa.modificar');
Route::get('/encuesta/eliminar/{id}', 'EmpresaController@eliminar')->name('empresa.eliminar');

// rutas de estado
Route::get('/estado', 'EstadoController@index')->name('estado.index');
Route::get('/estado/nueva', 'EstadoController@nueva')->name('estado.nueva');
Route::post('/estado/crear', 'EstadoController@crear')->name('estado.crear');
Route::get('/estado/editar/{id}', 'EstadoController@editar')->name('estado.editar');
Route::post('/estado/modificar/{id}', 'EstadoController@modificar')->name('estado.modificar');
Route::get('/estado/eliminar/{id}', 'EstadoController@eliminar')->name('estado.eliminar');


Route::get('/tema', 'HomeController@tema')->name('tema.index');
