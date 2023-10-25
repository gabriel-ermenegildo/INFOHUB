<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public $timestamps = false;
    public function servicos(): HasMany
    {
        return $this->hasMany(Servicos::class, "id_clientes");

    }
    
}


