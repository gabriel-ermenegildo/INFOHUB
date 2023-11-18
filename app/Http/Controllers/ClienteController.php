<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listagem()
    {
        $clientes = Clientes::all();

        return view('listagens/tela_clientes', [
            'clientes' => $clientes,
        ]);
    }

    public function cadastro()
    {
        return view('cadastros/cadastro_cliente');
    }
    public function salvar(Request $form)
    {
        $cli = new Clientes();
        $cli->nome = $form->input('nome');
        $cli->celular = $form->input('cel');
        $cli->email = $form->input('email');
        $cli->cidade = $form->input('city');
        $cli->cpf = $form->input('cpf');
        $cli->save();

        return redirect("/clientes/listagem");
    }
}

