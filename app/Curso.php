<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'grau', 'preco', 'duracao',
        'credito',
    ];
    public $timestamps = true;


    public function cadeira(){

        return $this->hasMany('App\Cadeiras');
    }

}
