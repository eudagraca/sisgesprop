<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
     //Nome da tabela
    protected $table = 'matriculas';
    // chave primaria
    public $primaryKey = 'id';
    protected $fillable = [
        'estudante_id', 'curso_id', 'ano_escolaridade', 'ano', 'preco'];

    public function estudante(){
        return $this->belongsTo('App\Estudante');
    }
}
