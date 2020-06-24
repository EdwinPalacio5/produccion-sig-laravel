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
    return view('index');
});

Route::get('/rotacion-mp/parametros','RotacionMPController@entriesIndex')->name('rmp_entries');
//Route::post('/rotacion-mp/procesar','RotacionMPController@entriesIndex');
Route::get('/rotacion-mp/resultados','RotacionMPController@resultsIndex')->name('rmp_resultados');

Route::get('/base', function(){
    return view('layouts.base');
});
