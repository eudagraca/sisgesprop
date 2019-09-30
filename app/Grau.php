<?php

namespace App;
use App\Curso;
use Illuminate\Database\Eloquent\Model;

class Grau extends Model
{
      //
    protected $table = 'graus';
    public $primaryKey = 'id';
    protected $fillable = [
        'grau'];
    public $timestamps = false;

     public function precos()
    {
        return $this->hasOne('App\Preco');
    }

     public function curso()
    {
        return $this->hasOne('App\Curso');
    }

}
