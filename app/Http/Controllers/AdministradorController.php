<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;


class AdministradorController extends Controller
{

    public function retornaViewLogin(){
        return view('auth.login');
    }

    public function logar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:8',
        ]);

        $credentials= ['email' =>$request->email, 'password'=>$request->password];
        if(Auth::attempt($credentials)){
            return redirect()->intended('/membroAdm/view');
        }else{
            return redirect()->back()->with('msg','Acesso negado');
        }

    }


    /*****************************************Retorna views******************************************/
    public function retornaViewMembros(){
        return view('membroAdm');
    }

    public function retornaViewEventos(){
        return view('eventosAdm');
    }

    public function retornaViewCadastroMembro(){
        return view('cadastrarMembro');
    }

    public function retornaViewCadastroEvento(){
        return view('cadastrarEvento');
    }
    
    /**********************************************Listas**********************************************/

/*pega do banco para listar na tela */
    public function listaMembros(){
        $membros = Membro::all();
        return view('membroAdm', membros);
    }

    public function listaEventos(){
        $eventos = Evento::all();
        return view('eventosAdm',eventos);
    }


    /*********************************************Cadastros*******************************************/

    public function cadastroMembro(request $request){//request
        //save
       
       // return Redirect::to('/membroAdm');
      //  return Redirect::route('/membroAdm');
        $membro = new Membro;
        $membro->nome = $request->nome;
        $membro->cargo = $request->cargo;
        $membro->idDepartamento = $request->idDepartamento;

        $membro->save();
        return view('membroAdm');
    }

    public function cadastroEvento(request $request){
        $evento = new Evento;
        $evento->nome = $request->nome;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->local = $request->local;

        $evento->save();
        return view('eventosAdm');

    }
}