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

Auth::routes();
Route::get('/', 'ComumController@retornaIndex')->name('index');
/*Route::post('/membroAdm', 'AdministradorController@logar')->name('login');*/

Route::get('/login', 'AdministradorController@retornaViewLogin')->name('login');
Route::post('/login', 'AdministradorController@logar');

Route::group(['middleware' => ['auth']], function(){
    
    //Route::get('/login', 'ComumController@retornaLogin')->name('login');

    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    });

    Route::get('/membroAdm/view', 'AdministradorController@retornaViewMembros')->name('view.membro');

    Route::post('/cadastrarMembro', 'AdministradorController@cadastrarMembro')->name('cadastroMembro');

});
    


//Retorna telas
//Route::get('/membroAdm/view', 'AdministradorController@retornaViewMembros');
Route::get('/eventosAdm/view', 'AdministradorController@retornaViewEventos');

Route::get('/cadastro/membroAdm/view', 'AdministradorController@retornaViewCadastroMembro');
Route::get('/cadastro/eventosAdm/view', 'AdministradorController@retornaViewCadastroEventos');
///////////////////////////////////

Route::get('/membroAdm/lista', 'AdministradorController@listaMembros');
Route::get('/eventosAdm/lista', 'AdministradorController@listaEventos');

Route::post('/membroAdm/cadastro', 'AdministradorController@cadastroMembro');
Route::post('/eventoAdm/cadastro', 'AdministradorController@cadastroEvento');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
