<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;
use App\Evento;
use App\Membro;
use App\User;




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
        $membros = Membro::all();
        return view('membroAdm', compact('membros'));
        //return view('membroAdm');
    }

    public function retornaViewEventos(){
        $eventos = Evento::all();
        return view('eventosAdm', compact('eventos'));
        //return view('eventosAdm');
    }

    public function retornaViewCadastroMembro(){

        return view('cadastrarMembro');
    }

    public function retornaViewCadastroEvento(){
        return view('cadastrarEvento');
    }

    

    public function retornaViewAlteraMembro($id){
       // $membros = Membro::all();
       
        $membro = Membro::where('idMembro','$id');
        return view('alterarMembro', compact('membro'));

       // return view('alterarMembro');
    }

    public function retornaViewAlteraEvento($id){
        $evento = Evento::where('idEvento','$id');
        return view('alterarEvento', compact('evento'));

       // return view('alterarEvento');
    }
    
    /**********************************************Listas**********************************************/

/*pega do banco para listar na tela */
  /*  public function listaMembros(){
        $membros = Membro::all();
        return view('membroAdm', membros);
    }

    public function listaEventos(){
        $eventos = Evento::all();
        return view('eventosAdm',eventos);
    }*/


    /*********************************************Cadastros*******************************************/

    public function cadastroMembro(Request $request){//request
        //save
       
       // return Redirect::to('/membroAdm');
      //  return Redirect::route('/membroAdm');
       //dd($request->all());
       
       
       $membro = new Membro;
        $membro->nome = $request->nome;
        $membro->funcao = $request->funcao;
        $membro->idDepartamento = $request->idDepartamento;

        $membro->save();
        //return view('membroAdm');
        return redirect()->intended('/membroAdm/view');
    }

    public function cadastroEvento(Request $request){
        //dd($request->all());

       // return redirect()->intended('/membroAdm/view');
        $evento = new Evento;
       
        $evento->data = $request->data;
        $evento->nome = $request->nome;
        $evento->local = $request->local;
        $evento->horario = $request->horario;

      //  $evento->save()
       // return redirect()->intended('/eventosAdm/view');
        $evento->save();
        return redirect()->intended('/eventosAdm/view');

        
        //return redirect()->back();

        //return redirect()->back()->with('msg','Acesso negado');
        //return redirect()->intended('/eventosAdm/view');
      //  return $this->retornaViewEventos();
        //return view('eventosAdm');

    }

    /******************************************Atualizações*******************************************/
    public function atualizaMembro(Request $request, $id){

        //dd($request->all());
        //$membro = Membro::find($request->idMembro);
       // $membro = Membro::where('idMembro','$id');
       // $membro = Membro::find($id);


        //dd($membro->idMembro);
       
        /*if($membro == null || ->produtor_id != Auth::user()->produtor->usuario_id)
            return redirect()->route('index');*/
      //  $titulo = 'Alterar';
        return 'alteração de dados';
        //return view('cadastrarMembro', compact('membro','titulo'));
    }

    public function atualizaEvento(Request $request){
        
    }

    /******************************************Exclusões**********************************************/
    public function deletaMembro(){

    }

    public function deletaEvento(){
        
    }


}