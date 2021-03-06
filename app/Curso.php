<?php

namespace App;
use App\Cadeira;

use Illuminate\Database\Eloquent\Model;
use App\Grau;

class Curso extends Model
{
    protected $table = 'cursos';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'grau_id', 'preco', 'duracao',
        'credito','preco_cadeira_atraso',
    ];
    public $timestamps = true;

    public function estudantes()
    {
        return $this->hasMany('App\Estudante');
    }

    public function cadeiras()
    {
        return $this->belongsToMany('App\Cadeira');
    }

    public function grau(){
        return $this->belongsTo('App\Grau');
    }

    public function inscricoes()
    {
        return $this->hasMany('App\Inscricao');
    }

    public function maltriculas()
    {
        return $this->hasMany('App\Matricula');
    }
}
