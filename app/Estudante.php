<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Estudante extends Model
{
     //Nome da tabela
    protected $table = 'estudantes';
    // chave primaria
    public $primaryKey = 'id';
    protected $fillable = [
        'name', 'last_name', 'nr_bi', 'nacionalidade', 'email',
        'telefone_principal', 'telefone_alternativo',
        'local_emissao_bi', 'data_emissao_bi','data_validade_bi','data_nascimento',
        'naturalidade','sexo','estado_civil','ocupacao','morada', 'morada_localidade','morada_pais','codigo_postal','qualificacao_previa','instituicao_ensino_medio','data_conclusao','localidade_morada_educacao','pais_estudo', 'curso_id'
    ];
    //timestamp
    public $timestamps = true;

    public function curso(){
        return $this->belongsTo('App\Curso');
    }

    public function matricula(){
        return $this->hasMany('App\Matricula');
    }
}
