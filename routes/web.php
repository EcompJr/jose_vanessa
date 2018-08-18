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

/*Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/', 'ComumController@retornaIndex')->name('index');

//Route::get('/login', 'ComumController@retornaLogin')->name('login');

Route::post('/membroAdm', 'AdministradorController@logar')->name('login');

Route::post('/cadastrarMembro', 'AdministradorController@cadastrarMembro')->name('cadastroMembro');


Auth::routes();