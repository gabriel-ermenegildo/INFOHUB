<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function listagem()
    {
        return view('servico/servicos');
    }
    public function cadastro()
    {
        return view('cadastros/cadastro_maquina');
    }
}
