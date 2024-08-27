<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TarefaController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para o controlador de exemplo
Route::get('/exemplo', [ExemploController::class, 'index']);

// Rota para listar contatos
Route::get('/contato', [ContactController::class, 'index'])->name('contato.index');

// Rota para armazenar um novo contato
Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

// Rota para atualizar um contato existente
Route::put('/contato/update/{id}', [ContactController::class, 'update'])->name('contato.update');

// Rota para deletar um contato
Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contato.destroy');

Route::get('/tarefas', [TarefaController::class, 'index']);