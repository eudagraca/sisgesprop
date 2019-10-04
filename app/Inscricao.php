<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $table = 'inscricoes';
    public $primaryKey = 'id';
    protected $fillable = [
        'curso_id', 'estudante_id', 'semestre', 'ano_escolaridade', 'preco', 'ano'
    ];
    public $timestamps = true;

    public function estudante(){
        return $this->belongsTo('App\Estudante');
    }

    public function curso(){
        return $this->belongsTo('App\Curso');
    }

    public function cadeiras(){
        return $this->belongsToMany('App\Cadeira');
    }
}