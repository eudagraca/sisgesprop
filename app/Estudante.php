<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'naturalidade','sexo','estado_civil','ocupacao','morada',
        'morada_localidade','morada_pais','codigo_postal','qualificacao_previa','instituicao_ensino_medio','data_conclusao','localidade_morada_educacao','pais_estudo'
    ];
    //timestamp
    public $timestamps = true;
}
