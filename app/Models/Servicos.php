<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Servicos extends Model
{
    use HasFactory;
    protected $table = 'servicos';
    public $timestamps = false;

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, "id_clientes");
    }

    public function maquina(): BelongsTo
    {
        return $this->belongsTo(Maquinas::class,"id_maquinas");
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo_de_servico::class, "id_tipo_de_servico");
    }

    public function dataFormatada() : string
    {
        if(empty($this->data)) return "Sem data";
        return date('d/m/Y', strtotime($this->data));
    }

    public function dataDeDevolucaoFormatada() : string
    {
        if(empty($this->data_de_devolucao)) return "Ainda não devolvida";
        return date('d/m/Y', strtotime($this->data_de_devolucao));
    }
}
