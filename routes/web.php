<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;

Route::get('/clientes/cadastro', [ClienteController::class, 'cadastro']);
Route::post('/clientes/cadastro',[ClienteController::class, 'salvar']);
Route::get('/clientes/listagem', [ClienteController::class, 'listagem']);

Route::get('/maquinas/cadastro', [MaquinaController::class, 'cadastro']);
Route::get('/maquinas/listagem', [MaquinaController::class, 'listagem']);
Route::post('/maquinas/cadastro',[MaquinaController::class, 'salvar']);

Route::get('/usuario/cadastro',  [UsuarioController::class, 'cadastro']);
Route::get('/',                  [UsuarioController::class, 'inicio']);
Route::get('/home',              [UsuarioController::class, 'telaLogin']);

Route::get('/servicos/listagem', [ServicoController::class, 'listagem']);
Route::get('/servico/cadastro',  [ServicoController::class, 'cadastro']);
Route::post('/servico/cadastro', [ServicoController::class, 'salvar']);