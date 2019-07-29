<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Nome da tabela
    protected $table = 'cursos';
    // chave primaria
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'grau', 'preco', 'duracao',
        'credito',
    ];
    //timestamp
    public $timestamps = true;
}
