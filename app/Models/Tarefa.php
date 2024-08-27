<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tarefas'; // Certifique-se de que o nome da tabela está correto

    protected $fillable = [
        'titulo',
        'descricao',
        'concluida',
    ];
}

