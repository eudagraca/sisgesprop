<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    //
    protected $table = 'precos';
    public $primaryKey = 'id';
    protected $fillable = [
        'preco_matricula', 'preco_inscricao', 'grau_id'];
    public $timestamps = true;

     public function grau()
    {
        return $this->hasOne('App\Grau');
    }
}
