<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo_de_servico extends Model
{
    use HasFactory;
    protected $table = 'tipo_de_servico';
    public $timestamps = false;
    public function servicos(): HasMany
    {
        return $this->hasMany(Servicos::class, "id_tipo_de_servico");

    }
}
