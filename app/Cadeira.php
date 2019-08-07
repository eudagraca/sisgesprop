<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
    protected $table = 'cadeira';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'curso', 'creditos', 'ano',
        'semestre',
    ];
    public $timestamps = true;

    public function curso()
    {
        return $this->belongsToMany('App\Curso');
    }

}
