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

///////////////////////////////////////Rotas comuns
Route::get('/', 'ComumController@retornaIndex')->name('index');
Route::get('/quemsomos','ComumController@retornaQuemSomos');
Route::get('/nossotime','ComumController@retornaNossoTime');








//////////////////////////////////////////////Rotas Admin
Route::get('/login', 'AdministradorController@retornaViewLogin')->name('login');
Route::post('/login', 'AdministradorController@logar');

Route::group(['middleware' => ['auth']], function(){
    
    //Route::get('/login', 'ComumController@retornaLogin')->name('login');

    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    });


    ///////////////////////////////////////////////Retorna telas
    Route::get('/membroAdm/view', 'AdministradorController@retornaViewMembros')->name('view.membro');
    Route::get('/eventosAdm/view', 'AdministradorController@retornaViewEventos');
    Route::get('/cadastro/membroAdm/view', 'AdministradorController@retornaViewCadastroMembro');
    Route::get('/cadastro/eventosAdm/view', 'AdministradorController@retornaViewCadastroEventos');

    ///////////////////////////////////////////exibe listas
    Route::get('/membroAdm/lista', 'AdministradorController@listaMembros');
    Route::get('/eventosAdm/lista', 'AdministradorController@listaEventos');

    //////////////////////////////////////cadastros
    Route::post('/membroAdm/cadastro', 'AdministradorController@cadastroMembro');
    Route::post('/eventoAdm/cadastro', 'AdministradorController@cadastroEvento');

   // Route::post('/cadastrarMembro', 'AdministradorController@cadastrarMembro')->name('cadastroMembro');

});
    


//Retorna telas
//Route::get('/membroAdm/view', 'AdministradorController@retornaViewMembros');
//Route::get('/eventosAdm/view', 'AdministradorController@retornaViewEventos');

/*Route::get('/cadastro/membroAdm/view', 'AdministradorController@retornaViewCadastroMembro');
Route::get('/cadastro/eventosAdm/view', 'AdministradorController@retornaViewCadastroEventos');
///////////////////////////////////

Route::get('/membroAdm/lista', 'AdministradorController@listaMembros');
Route::get('/eventosAdm/lista', 'AdministradorController@listaEventos');

Route::post('/membroAdm/cadastro', 'AdministradorController@cadastroMembro');
Route::post('/eventoAdm/cadastro', 'AdministradorController@cadastroEvento');*/


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
