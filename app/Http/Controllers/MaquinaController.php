<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function listagem()
    {
        return view('maquinas/maquinas');
    }
    
    public function cadastro()
    {
        return view('cadastros/cadastro_maquina');
    }
}
