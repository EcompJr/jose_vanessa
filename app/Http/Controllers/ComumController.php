<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class ComumController extends Controller
{

    public function retornaIndex()
    {
        return view('index');
    }

    /*public function retornaLogin()
    {
        return view('');
    }*/

}