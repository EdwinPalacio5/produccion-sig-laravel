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

Route::get('/rotacion-mp/parametros','RotacionMPController@entriesIndex')->name('rmp_entries');
//Route::post('/rotacion-mp/procesar','RotacionMPController@entriesIndex');
Route::get('/rotacion-mp/resultados','RotacionMPController@resultsIndex')->name('rmp_resultados');

Route::get('/base', function(){
    return view('layouts.base');
});

Route::get('/usuarios','HomeController@listUsers')->name('usuarios');
Route::get('/usuario/block/{id}','HomeController@blockUser')->name('block_user');
Route::get('/usuario/create','HomeController@createUser')->name('create_user');
Route::post('/usuario/store','HomeController@storeUser')->name('store_user');
Route::get('/usuario/edit{user_id}','HomeController@editUser')->name('edit_user');
Route::post('/usuario/update','HomeController@updateUser')->name('update_user');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/index', 'HomeController@index');