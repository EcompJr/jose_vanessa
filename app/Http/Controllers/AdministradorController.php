<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class AdministradorController extends Controller
{
   
   /* public function __construct(){
        $this->middleware('auth');
    }*/

    public function logar()
    {
     /*   //return view('loginAdm');
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'senha' => 'required|max:255'
        ]);
    if(Auth::attempt(['email' => $request->email, 'senha' => $request->senha])){
        return view('cadastrarMembro');
    }
    return 'Não foi logado';*/
        return view('membroAdm');
    }

    public function cadastrarMembro(){//request
        //save
       
       // return Redirect::to('/membroAdm');
      //  return Redirect::route('/membroAdm');
        return view('cadastrarMembro');
    }
}