<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Maquinas;
use App\Models\Servicos;
use App\Models\Tipo_de_servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function listagem()
    {
        $servicos = Servicos::all();

        return view('listagens/servicos', [
            'servicos' => $servicos,
        ]);
    }
    public function cadastro()
    {
        $clientes = Clientes::all();
        $maquinas = Maquinas::all();
        $servicos = Tipo_de_servico::all();


        return view('cadastros/cadastro_servico', [
            'clientes' => $clientes,
            'maquinas' => $maquinas,
            'servicos' => $servicos,
        ]);
    }

    public function salvar(Request $form)
    {
        $ser = new Servicos();
        $ser->id_clientes = $form->input('id_clientes'); 
        $ser->id_maquinas = $form->input('id_maquinas');
        $ser->id_tipo_de_servico = $form->input('id_tipo_de_servico');
        $ser->orcamento = $form->input('orcamento');
        $ser->data = $form->input('data');
        $ser->data_de_devolucao = $form->input('data_de_devolucao');
        $ser->save();

        return redirect("/servicos/listagem");
    }
}
