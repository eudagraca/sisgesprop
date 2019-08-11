<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'grau', 'preco', 'duracao',
        'credito','preco_cadeira_atraso',
    ];
    public $timestamps = true;


    public function cadeira(){

        $this->hasMany('App\Cadeiras');
    }

    public function estudante(){

        return $this->hasMany(Estudante::class);
    }


}
