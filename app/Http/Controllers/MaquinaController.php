<?php

namespace App\Http\Controllers;

use App\Models\Maquinas;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function listagem()
    {
        $maquinas = Maquinas::all();

        return view('listagens/maquinas', [
            'maquinas' => $maquinas,
        ]);
    }
    
    public function cadastro()
    {
        return view('cadastros/cadastro_maquina');
    }
    public function salvar(Request $form)
    {
        $maq = new Maquinas();
        $maq->modelo = $form->input('modelo');
        $maq->valor = $form->input('valor');
        $maq->numero_serie = $form->input('nserie');
        $maq->alugada = $form->input('alugada');
        $maq->save(); 
    
        return redirect("/maquinas/listagem");
    }
}
