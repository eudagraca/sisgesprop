<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
    protected $table = 'cadeiras';
    public $primaryKey = 'id';
    protected $fillable = [
        'nome', 'codigo', 'creditos', 'ano',
        'semestre',
    ];
    public $timestamps = true;

    public function curso()
    {
        return $this->belongsToMany('App\Curso');
    }

}
