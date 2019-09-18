<?php

namespace App;
use App\Cadeira;

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

    public function estudantes()
    {
        return $this->hasMany('App\Estudante');
    }

    public function cadeiras()
    {
        return $this->belongsToMany('App\Cadeira');
    }
}
