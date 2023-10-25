<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listagem()
    {
        return view('cliente/tela_clientes');
    }

    public function cadastro()
    {
        return view('cadastros/cadastro_cliente');
    }
}
