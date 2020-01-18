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

//Route::get('/', function () {
//    return view('welcome');
////    return "Hola Mundo";
//
//});
//
//Route::get('/user', function () {
//    return view('user');
//});
//
//Route::get('/site','controllerpractica@index');
//
//Route::get('/site2/{site2}','controllerpractica@prueba');
////nombre sexo y edad son datos obligatorios para la ruta
////Routa Dinamica, los valores, nombre sexo y edad son datos dinamicos.
//Route::match(["GET","POST"],'/{nombre}/{sexo?}/{edad?}', 'Prueba\PruebaController@index')->where(['nombre'=>'[a-zA-Z]+','sexo'=>'[a-zA-Z]+','edad'=>'[1-9]+']);

//Ruta estatica
Route::post("info", "Prueba\PruebaController@info");

Route::get("formulario", "Prueba\PruebaController@form");
