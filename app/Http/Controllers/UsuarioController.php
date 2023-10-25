<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function telaLogin()
    {
        return view('login/tela_login');
    }
    
    public function cadastro()
    {
        return view('cadastros/tela_cadastrousuario');
    }
    public function inicio()
    {
        return view('inicio/tela_inicial');
    }
}
