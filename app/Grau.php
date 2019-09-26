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
        return $this->belongsTo('App\Preco');
    }

     public function curso()
    {
        return $this->belongsTo('App\Curso');
    }

}
