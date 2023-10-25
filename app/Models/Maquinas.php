<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Maquinas extends Model
{
    use HasFactory;
    protected $table = 'maquinas';
    public $timestamps = false;
    public function servicos(): HasMany
    {
        return $this->hasMany(Servicos::class, "id_maquinas");

    }
}
