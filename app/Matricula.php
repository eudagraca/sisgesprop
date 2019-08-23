<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
     //Nome da tabela
    protected $table = 'matriculas';
    // chave primaria
    public $primaryKey = 'id';
    protected $fillable = ['nr_processo'];
}
